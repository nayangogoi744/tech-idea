// function showDiv(divId, element)
// {
//     document.getElementById(divId).style.display = element.value == 1 ? 'block' : 'none';
// }

$(document).ready(function(){
    $("#migration").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
$(document).ready(function() {

    $('#source').change(function(){

    var source_id=$('#source').val();
    $('#target').empty(); //remove all existing options

    $.get('target.php',{'source_id':source_id},function(return_data){
    $.each(return_data.data, function(key,value){
        $("#target").append("<option value=" + value.target_id +">"+value.target_value+"</option>");
  });
}, "json");

});

});