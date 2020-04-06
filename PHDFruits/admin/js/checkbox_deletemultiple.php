<?php ?>
<script>
    function show_confirm22()
    {
        var r=confirm("Bạn có chắc muốn xoá những lựa chọn này ???");
        if (r==true)
        {return true;
        }
        else
        {
            return false;
        }
    }
</script>
<!--check box selection-->
<script language="javascript">
    $(function(){
    // add multiple select / deselect functionality
    $("#selectall").click(function () {
        $('.case').attr('checked', this.checked);
    });
    // if all checkbox are selected, check the selectall checkbox
    // and viceversa
    $(".case").click(function(){

        if($(".case").length == $(".case:checked").length) {
            $("#selectall").attr("checked", "checked");
        } else {
            $("#selectall").removeAttr("checked");
        }
    });
    });
</script>