<header>
    <div id="reg-header" style="z-index: 1">

        <div class="reg-head-container">

            <div class="reg-pull-left">
                <!-- Logo -->
                <div class="reg-header-logo">
                    <a class="logo" href="{{url('/')}}">
                        <img src="/assets/img/logo.png" alt="">
                    </a>
                </div>
                <!-- /Logo -->
                <!--Adding progress bar-->
                <script>
                    var progress_percentage;
                    var progress;
                    function getPercentage() {
                        progress_percentage=document.getElementById('progress_percentage').value
                        
                    }
                    }

                </script>
                <!-- We need to link the value of the percentage -->
                <div class="progress">
                <div class="meter" style="width:50%"></div>
                </div>
            </div>
        </div>
    </div>
</header>
@section('scripts')
    <script type="text/javascript" src="{{asset('../js/global.js')}}"></script>
@endsection
