<?php
if(isset($_POST['logout'])){
    $logout = $_POST['logout'];

    unset($_SESSION["loggedin"]);
    session_destroy();
    header("location: index2.php");
}
?>
<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content neumorphic2">
        <!-- sidebar-brand  -->
        <div class="sidebar-item sidebar-brand">
            <a href="home.php"><img src="image/logo2.png" style="width: 95%;"  ></a>
        </div>
        <!-- sidebar-header  -->
        <div class="sidebar-item sidebar-header d-flex flex-nowrap">
            <div class="user-pic">
                <img class="img-responsive img-rounded" src="image/user.jpg" alt="User picture" style="border-radius: 10px;">
            </div>
            <div class="user-id">
               
                <span class="user-role">User</span>
                <span class="user-status">
                    <i class="fa fa-circle"></i>
                    <span>Online</span>
                </span>
            </div>
        </div>
        <!-- sidebar-search  -->
        <div class="search">
            <div class="input-group">
                <input type="text" class="search__input" placeholder="Search...">
                <div class="search__icon">
                <i class="fa fa-search"></i>
                </div>
            </div>
          </div>
        <!-- sidebar-menu  -->
        <div class=" sidebar-item sidebar-menu">
            <ul>
                <li class="header-menu">
                    <span>General</span>
                </li>
                <li>
                    <a href="home.php">
                        <i class="fa fa-home neumorphic2"></i>
                        <span class="menu-text">Homepage</span>
                        <span class="badge badge-pill badge-warning">New</span>
                    </a>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fa fa-paint-brush neumorphic2"></i>
                        <span class="menu-text">Art</span>
                        <span class="badge badge-pill badge-danger">3</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="art.php">Products</a>
                            </li>
                            <li>
                                <a href="cart.php">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="checkout.php">Checkout</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="artist.php">
                        <i class="fa fa-user neumorphic2"></i>
                        <span class="menu-text">Artist</span>
                    </a>
                </li>
                <li>
                    <a href="about.php">
                        <i class="fa fa-question-circle neumorphic2"></i>
                        <span class="menu-text">About</span>
                    </a>
                </li>

            
                <li>
                    <a href="contact.php">
                        <i class="fa fa-location-arrow neumorphic2"></i>
                        <span class="menu-text">Contact Us</span>
                    </a>
                </li>
               
            </ul>
        </div>
        <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-footer  -->
    <div class="sidebar-footer">
        <div class="dropdown">

            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-bell" style="margin-left: 20px;"></i>
            </a>
            <div class="dropdown-menu notifications" aria-labelledby="dropdownMenuMessage">
                <div class="notifications-header">
                    <i class="fa fa-bell"></i>
                    Notifications
                </div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                    <div class="notification-content">
                        <div class="icon">
                            <i class="fas fa-check text-success border border-success"></i>
                        </div>
                        <div class="content">
                            <div class="notification-detail">New Notification</div>
                            <div class="notification-time">
                                6 minutes ago
                            </div>
                        </div>
                    </div>
                </a>
                <a class="dropdown-item" href="#">
                    <div class="notification-content">
                        <div class="icon">
                            <i class="fas fa-exclamation text-info border border-info"></i>
                        </div>
                        <div class="content">
                            <div class="notification-detail">New Notification</div>
                            <div class="notification-time">
                                Today
                            </div>
                        </div>
                    </div>
                </a>
                <a class="dropdown-item" href="#">
                    <div class="notification-content">
                        <div class="icon">
                            <i class="fas fa-exclamation-triangle text-warning border border-warning"></i>
                        </div>
                        <div class="content">
                            <div class="notification-detail">New Notification</div>
                            <div class="notification-time">
                                Yesterday
                            </div>
                        </div>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-center" href="#">View all notifications</a>
            </div>
        </div>
        <div>
            <a href="cart.php">
                <i class="fa fa-cart-plus"></i>
            </a>
        </div>
        <div class="dropdown">
            <a href="setting.php" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-cog"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuMessage">
                <a class="dropdown-item" href="#">My profile</a>
                <a class="dropdown-item" href="#">Help</a>
            </div>
        </div>
        <div>
            <a name="logout" type="submit" href="index2.php" style="cursor: pointer;">
                <i class="fa fa-power-off"></i>
            </a>
        </div>
        <div class="pinned-footer">
           
        </div>
    </div>
</nav>