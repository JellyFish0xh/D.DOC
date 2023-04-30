
<section class="header">
    <div class="container">
        <nav>
          <ul class="links">
            <li><a href="#Home" class="logo">D.Doc</a></li>
            <li><a href="#Service" class="logo">Service</a></li>
            <li><a href="#About" class="logo">About</a></li>
            <li><a href="#FAQ" class="logo">FAQ</a></li>
          </ul>
        </nav>
        
            <?php
            if(isset($_COOKIE["name"])){
                echo "<a class='signup'><center>".$_COOKIE["name"]."</center></a>";
            }
            else
            {
              echo "<a class='signup' href='login.php'><center>Login</center></a>";
            }
            ?>
      </div>
    </div>
  </section>