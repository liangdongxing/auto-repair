 <footer class="main-footer">
     @auth
         <div class="pull-right hidden-xs">
             Anything you want
         </div>
         <!-- Default to the left -->
         <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
     @else
             <div class="container">
                 <div class="pull-right hidden-xs">
                     <b>Version</b> 2.4.0
                 </div>
                 <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
                 reserved.
             </div>
     @endauth
 </footer>