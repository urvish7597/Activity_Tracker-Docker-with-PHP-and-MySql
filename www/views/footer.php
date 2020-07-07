
</section>
<footer class="footer footer-color text-center">
        <span class=" ">Created in 2020</span>
    
    </footer>


    <?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if(isset($_SESSION['userid']))
{
  //header("location:index.php");
  exit;
}
?>
</body>
</html>

