<template>
	<div>
		<button class="btn btn-info btn-lg" data-target="#myModal" data-toggle="modal" type="button">Add Student</button>

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>SL</th>
					<th>Name</th>
					<th>Roll</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr v-for="(value,index) in studentList">
					<td>{{ ++index }}</td>
					<td>{{ value.name }}</td>
					<td>{{ value.roll }}</td>
					<td>
						<p :style="value.status==1 ? 'color:green' : 'color:red'">{{ value.status==1 ? "ON" : "OFF" }}</p>
					</td>
					<td>
						<button :class="value.status==1 ? 'btn-success' : 'btn-danger'" @click="StatusChange(value.id)" class="btn btn-sm">Status</button>
						<button @click="editStudent(value)" class="btn btn-sm btn-info" data-target="#editModal" data-toggle="modal">Edit</button>
					</td>
				</tr>
			</tbody>
		</table>

		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal" type="button">&times;</button>
						<h4 class="modal-title">Student</h4>
					</div>
					<form @submit.prevent="addStudenFunction()">
						<div class="modal-body">
							<label>Name</label>
							<input class="form-control" type="text" v-model="AddStudentData.name" />
							<label>Roll</label>
							<input class="form-control" type="text" v-model="AddStudentData.roll" />
							<label>Allow us?</label>
							<input type="checkbox" v-model="AddStudentData.status" />
						</div>
						<div class="modal-footer">
							<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
							<button class="btn btn-success">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="modal fade" id="editModal" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal" type="button">&times;</button>
						<h4 class="modal-title">Student</h4>
					</div>
					<form @submit.prevent="UpdateStudent(EditStudentData.id)">
						<div class="modal-body">
							<label>Name</label>
							<input class="form-control" type="text" v-model="EditStudentData.name" />
							<label>Roll</label>
							<input class="form-control" type="text" v-model="EditStudentData.roll" />
							<label>Allow us?</label>
							<input type="checkbox" v-model="EditStudentData.status" />
						</div>
						<div class="modal-footer">
							<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
							<button class="btn btn-success">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
export default {
	name: "CrudComponent",
	data() {
		return {
			AddStudentData: {
				name: "",
				roll: "",
				status: false,
			},
			EditStudentData: "",
			studentList: "",
		};
	},
	methods: {
		addStudenFunction: function () {
			const self = this;
			axios
				.post("/student", self.AddStudentData)
				.then((response) => {
					console.log(response.data);
					$("#myModal").modal("hide");
				})
				.catch((error) => {
					console.log(error);
				});
		},
		getStudents: function () {
			const self = this;
			axios
				.get("/student")
				.then((response) => {
					self.studentList = response.data;
				})
				.catch((error) => console.log(error));
		},
		StatusChange: function (id) {
			const self = this;
			axios.get("/student/" + id).then((response) => {
				console.log(response.data);
				self.getStudents();
			});
		},
		editStudent: function (data) {
			const self = this;
			self.EditStudentData = data;
		},
		UpdateStudent: function (id) {
			const self = this;
			axios.put("/student/" + id, self.EditStudentData).then((response) => {
				console.log(response.data);
				$("#editModal").modal("hide");
				self.getStudents();
			});
		},
	},
	created() {
		this.getStudents();
	},
};
</script>