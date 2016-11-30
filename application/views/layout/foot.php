</div>

      <!--END PAGE CONTENT -->     
          
      <!-- PAGE LEVEL SCRIPTS -->
       <!-- GLOBAL SCRIPTS -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->

         <!-- PAGE LEVEL SCRIPTS -->
    <script src="<?php echo base_url() ?>assets/plugins/jasny/js/bootstrap-fileupload.js"></script>
    <script src="<?php echo base_url() ?>assets/js/notifications.js"></script>

     <script src="<?php echo base_url() ?>assets/plugins/validationengine/js/jquery.validationEngine.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/validationengine/js/languages/jquery.validationEngine-en.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery-validation-1.11.1/dist/jquery.validate.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/validationInit.js"></script>
         <!-- END PAGE LEVEL SCRIPTS -->
      <!--END PAGE LEVEL SCRIPTS -->
    <script>
      $(document).ready(function () {
        $('.angka').keypress(function(event) {
          var charCode = (event.which) ? event.which : event.keyCode
          if ((charCode >= 48 && charCode <= 58)||(charCode == 08 || charCode == 43 ||charCode == 09 ))
          return true;
          return false;
          });
        $('.huruf').keypress(function(event) {
          var charCode = (event.which) ? event.which : event.keyCode
          if ((charCode >= 65 && charCode <= 90)||(charCode >= 97 && charCode <= 122)||(charCode == 08||charCode == 32||charCode == 09))
          return true;
          return false;
          });
      });
    </script>

    <script>
      $(function () { Notifications(); });
       $(function () { formValidation(); });
    </script>

</body>
    <!-- END BODY -->
</html>