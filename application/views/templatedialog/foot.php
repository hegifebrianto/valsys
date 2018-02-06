   <script type="text/javascript">
   //hide loading mask
      function hideloaders(){
         function hideloader(){
            var loadingMask = Ext.get('loading-mask');
            var loading = Ext.get('loading');

            loading.hide();
            loadingMask.hide();
         }
         setTimeout(hideloader,500)
      }

      Ext.onReady(function(){    
         hideloaders();
      })
   </script>

   <div id="loading-mask"></div>
   <div id="loading">
         <span id="loading-message"><b>Loading Page.</b> Please wait...</span>
   </div>

</body>
</html>


