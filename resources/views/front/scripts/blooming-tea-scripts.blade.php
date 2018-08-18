<script>
$(document).ready( function() {
    // เมื่อ user กด click ปุ่ม ภาพ set up ฟอร์มและแสดง ฟอร์มสำหรับ แก้ไขข้อมูล
    // This is used when user clicks the image at Bloomingtea page
    $(document).on('click', '.display-hover', function () {
        var details = $(this).data('info').split('-');
        fillmodalData(details);
        $('#myModal').modal('show');

    })

    // fillmodalData ใส่ข้อมูลที่
    function fillmodalData(details) {
        $('.modal-title').text(details[0]);
        $("#show-image").attr("src","/images/character-stories/"+ details[1]+".png");
        $(".modal-header").css("background-color", "#"+details[2]);
        $(".modal-footer").css("background-color", "#"+details[2]);
    }
})
</script>