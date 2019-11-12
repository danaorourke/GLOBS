<template></template>
<script>
    export default {
        mounted() {
          $(document).ready(function() {
            $('.stat').each(function(){
              $(this).on('change', function(){
                calculateTotal();
              });
            });
           
           // calculate total of stats and replace value of total
           function calculateTotal() {
             var sum = 0;
             
             $('.stat').each(function(){
               
               // if the value's above 10, pop her back down.
               if ( $(this).val() > 10 ) { $(this).val(10); }
               
               // count up the total
               sum += Number($(this).val());
             });

             $('#pointsTotal').val(sum);
             
             
             // disable the submit if the sum is greater than 40, and color the text input red.
             if (sum > 40) {
               $("#submitPet").prop("disabled", true);
               $("#pointsTotalLabel").addClass("text-danger");
             } else {
               $("#submitPet").prop("disabled", false);
               $("#pointsTotalLabel").removeClass("text-danger");
             }
           };
           
          });
        }
    }
</script>