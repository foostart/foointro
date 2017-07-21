$(document).ready(function(){
    $("#img").change(function(){
        readURL(this);
        var img = $(this).val();
        // console.log(img);
    });
    
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#show_img').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
});