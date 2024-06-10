<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- JAVASCRIPT -->
 <script src="{{ asset('admin_asset/libs/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- App js -->
 <script src="{{ asset('admin_asset/js/app.js') }}"></script>
 <!-- include jQuery library -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.11/jquery.lazy.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>


<script>
    $(document).ready(function () {
        // Lazy load images
        $('.lazy').Lazy({
            // your configuration goes here
            scrollDirection: 'vertical',
            effect: 'fadeIn',
            visibleOnly: true,
            onError: function(element) {
                console.log('error loading ' + element.data('src'));
            }
        });
    });
</script>
 <script>

    function addToCart(id) {
        $.ajax({
            url: '{{ route("carts.add") }}',
            type: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: { id: id },
            dataType: 'json',
            success: function (response) {
                if(response.status==true){
                    localStorage.setItem("successMessage", response.message);
                    window.location.href="{{ route('carts.details') }}"
                }else{
                    $('#cartErrorModal').modal('show');
                }
            },

        });
    }
    function addToWishlist(id) {
        $.ajax({
            url: '{{ route("wishlists.add") }}',
            type: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: { id: id },
            dataType: 'json',
            success: function (response) {
                if(response.status==true){
                    showToast(response.message);
                }else{
                    window.location.href="{{ route('login') }}"
                }
            },

        });
    }
 </script>
