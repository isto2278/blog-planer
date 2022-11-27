$(document).ready(function(){
  $.ajax("api/update.php?test=true").done(function(data){
    console.log(data);
  });
});