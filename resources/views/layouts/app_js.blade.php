<script src="/assets/js/gsap/TweenMax.min.js"></script>
<script src="/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
<!-- Bottom scripts (common) -->
<script src="assets/js/bootstrap.js"></script>
<script src="/assets/js/joinable.js"></script>
<script src="/assets/js/resizeable.js"></script>
<script src="/assets/js/neon-api.js"></script>
<script src="/assets/js/jquery.sparkline.min.js"></script>
<script src="/assets/js/bootstrap-switch.min.js"></script>
<!-- JavaScripts initializations and stuff -->
<script src="/assets/js/neon-custom.js"></script>
<!-- Demo Settings -->
<script src="/assets/js/neon-demo.js"></script>
<script src="/assets/js/popper.js/dist/umd/popper.min.js"></script>
{{-- Select 2 --}}
<script src="/assets/js/select2/select2.min.js"></script>

<script type="text/javascript" src="/js/app.js"></script>

@yield('js')

<script>
    @foreach ($errors->all() as $error)
    toastr.warning("{{ $error }}","Warning",{timeOut: 5000,});
    @endforeach
</script>