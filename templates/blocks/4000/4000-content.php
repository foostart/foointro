<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4000">
  <nav class="navbar navbar-default">
        <div class="hiding-header">
            <div class="text-center">
                    <a href="#"class="navbar-brand-full">
                        <img class="img-responsive"src="image/logo_full.png" alt=""/>
                    </a>
            </div>
        </div>
      
        <div class="header-bar">
            <div class="navbar-collapse mega-nav">
                <div class="mega-container text-center">
            <div class="content-one">

          <div class="wsmain">
    
      <nav class="wsmenu clearfix">
        <ul class="mobile-sub wsmenu-list">
         
       
    
    
       
          <li><a href="#"><i class="fa fa-sign-in"></i>My Account <span class="arrow"></span></a>
            <div class="megamenu halfdiv03">
              <h3 class="title">Login</h3>
              <form name="contact_name" class="menu_form">
                <input type="text" placeholder="User Name">
                <input type="password" placeholder="Password">
                <input type="button" value="Reset">
                <input type="submit" value="Login">
              </form>
            </div>
          </li>
          <li><a href="#"><i class="fa fa-paper-plane"></i>Contact Us <span class="arrow"></span></a>
            <div class="megamenu halfdiv">
              <h3 class="title">Contact Us</h3>
              <form name="contact_name" class="menu_form">
                <input type="text" placeholder="Name">
                <input type="text" placeholder="Email">
                <textarea placeholder="Your message..."></textarea>
                <input type="button" value="Reset">
                <input type="submit" value="Send">
              </form>
              <div class="cl"></div>
            </div>
          </li>
          <li class="carticon"> <a href="#"><i class="fa fa-shopping-basket" ></i> <em class="roundpoint">8</em><span class="mobiletext">Shopping Cart</span></a> </li>
     
        </ul>
      </nav>
    </div>
            
            </div>
            
                </div>
            </div>
            
            
            <div class="navbar-collapse mega-nav">
                <div class="mega-container text-center">
                    <div class="tontent-two">
                  

         <div class="wsmenucontainer clearfix">
  <div class="overlapblackbg"></div>
  <div class="wsmobileheader clearfix"> 
      <a id="wsnavtoggle" class="animated-arrow"><span></span></a> 
      <a class="smallogo"><img src="images/sml-logo.png" width="87" alt="" /></a> 
      a class="callusicon" href="tel:123456789"><span class="fa fa-phone"></span></a> 
  </div>
  
  <div class="header"> 
    

    <!--Main Menu HTML Code-->
    <div class="wsmain">
      <div class="smllogo"><a href="#">
              <img class="img-responsive"src="image/logo_compact_1.png" alt=""/>
          </a></div>
        <div class="rightmenu">
            <form class="topmenusearch">
              <input placeholder="Search...">
              <button class="btnstyle"><i class="searchicon fa fa-search" aria-hidden="true"></i></button>
            </form>
          </div>
      
      <nav class="wsmenu clearfix">
        <ul class="mobile-sub wsmenu-list">
        
           <li><a href="#"><i class="fa fa-align-justify"></i>Dropdowns <span class="arrow"></span></a>
            <ul class="wsmenu-submenu">
              <li><a href="#"><i class="fa fa-angle-right"></i>Website Design </a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i>Ecommerce Solutions</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i>Application Development</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i>Website Development</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i>Open Source Development</a>
                <ul class="wsmenu-submenu-sub">
                  <li><a href="#"><i class="fa fa-angle-right"></i>Submenu item 1</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>Submenu item 2</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>Submenu item 3</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>Submenu item 4</a>
                    <ul class="wsmenu-submenu-sub-sub">
                      <li class=""><a href="#"><i class="fa fa-angle-right"></i>Submenu item 1 Sub</a></li>
                      <li class=""><a href="#"><i class="fa fa-angle-right"></i>Submenu item 2 Sub</a></li>
                      <li class=""><a href="#"><i class="fa fa-angle-right"></i>Submenu item 3 Sub</a></li>
                      <li class=""><a href="#"><i class="fa fa-angle-right"></i>Submenu item 4 Sub</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-align-justify"></i>Dropdowns <span class="arrow"></span></a>
            <ul class="wsmenu-submenu">
              <li><a href="#"><i class="fa fa-angle-right"></i>Website Design </a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i>Ecommerce Solutions</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i>Application Development</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i>Website Development</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i>Open Source Development</a>
                <ul class="wsmenu-submenu-sub">
                  <li><a href="#"><i class="fa fa-angle-right"></i>Submenu item 1</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>Submenu item 2</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>Submenu item 3</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i>Submenu item 4</a>
                    <ul class="wsmenu-submenu-sub-sub">
                      <li class=""><a href="#"><i class="fa fa-angle-right"></i>Submenu item 1 Sub</a></li>
                      <li class=""><a href="#"><i class="fa fa-angle-right"></i>Submenu item 2 Sub</a></li>
                      <li class=""><a href="#"><i class="fa fa-angle-right"></i>Submenu item 3 Sub</a></li>
                      <li class=""><a href="#"><i class="fa fa-angle-right"></i>Submenu item 4 Sub</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-list-alt"></i>Half menu <span class="arrow"></span></a>
            <div class="megamenu clearfix halfmenu">
              <ul class="col-lg-6 col-md-6 col-xs-12 link-list">
                <li class="title">Product Header</li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Submenu link style</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Submenu link style</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Submenu link style</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Submenu link style</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Submenu link style</a></li>
              </ul>
              <ul class="col-lg-6 col-md-6 col-xs-12 link-list">
                <li class="title">Product Header</li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Submenu link style</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Submenu link style</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Submenu link style</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Submenu link style</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Submenu link style</a></li>
              </ul>
            </div>
          </li>
          <li><a href="#"><i class="fa fa-list-alt"></i>Mega menu <span class="arrow"></span></a>
            <div class="megamenu clearfix">
              <ul class="col-lg-3 col-md-3 col-xs-12 link-list">
                <li class="title">Product Header</li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Submenu link style</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Submenu link style</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Submenu link style</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Submenu link style</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Submenu link style</a></li>
              </ul>
              <ul class="col-lg-3 col-md-3 col-xs-12 link-list">
                <li class="title">Product Header</li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Submenu link style</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Submenu link style</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Submenu link style</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Submenu link style</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Submenu link style</a></li>
              </ul>
              <ul class="col-lg-3 col-md-3 col-xs-12 link-list">
                <li class="title">Product Header</li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Submenu link style</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Submenu link style</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Submenu link style</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Submenu link style</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Submenu link style</a></li>
              </ul>
              <div class="col-lg-3 col-md-3 col-xs-12">
                <h3 class="title">New Arrival </h3>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active"> <img src="images/image01.jpg" alt="This is Product Name">
                      <div class="carousel-caption"> CodeCanyon </div>
                    </div>
                    <div class="item"><img src="images/image02.jpg" alt="This is Product Name">
                      <div class="carousel-caption"> ThemeForest </div>
                    </div>
                    <div class="item"><img src="images/image03.jpg" alt="This is Product Name">
                      <div class="carousel-caption"> GraphicRiver </div>
                    </div>
                    <div class="item"><img src="images/image04.jpg" alt="This is Product Name">
                      <div class="carousel-caption"> ActiveDen </div>
                    </div>
                    <div class="item"><img src="images/image05.jpg" alt="This is Product Name">
                      <div class="carousel-caption"> PhotoDune </div>
                    </div>
                    <div class="item"><img src="images/image06.jpg" alt="This is Product Name">
                      <div class="carousel-caption"> 3DOcean </div>
                    </div>
                  </div>
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="fa fa-arrow-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="fa fa-arrow-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
              </div>
            </div>
          </li>
          <li><a href="#"><i class="fa fa-paragraph"></i>Typography <span class="arrow"></span></a>
            <div class="megamenu clearfix" >
              <div class="typography-text clearfix">
                <div class="col-lg-6 col-sm-12">
                  <h3 class="title">This is another title</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s Ipsum more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="col-lg-3 col-sm-12">
                  <h3 class="title">This is another title</h3>
                  <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                </div>
                <div class="col-lg-3 col-sm-12">
                  <h3 class="title">This is another title</h3>
                  <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia. </p>
                </div>
                <div class="cl"></div>
                <div class="col-lg-3 col-sm-12">
                  <h3 class="title">Other Services</h3>
                  <ul>
                    <li><a href="#"><i class="fa fa-wordpress"></i>Wordpress Development</a></li>
                    <li><a href="#"><i class="fa fa-drupal"></i>Drupal Development</a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i>Shoping Cart Development</a></li>
                  </ul>
                </div>
                <div class="col-lg-3 col-sm-12">
                  <h3 class="title">More Services</h3>
                  <ul>
                    <li><a href="#"><i class="fa fa-android"></i> Android App Development</a></li>
                    <li><a href="#"><i class="fa fa-apple"></i>iPhone App Development</a></li>
                    <li><a href="#"><i class="fa fa-windows"></i>Windows App Development</a></li>
                  </ul>
                </div>
                <div class="col-lg-3 col-sm-12">
                  <h3 class="title">Other Products</h3>
                  <ul>
                    <li><a href="#"><i class="fa fa-wordpress"></i>Wordpress Development</a></li>
                    <li><a href="#"><i class="fa fa-drupal"></i>Drupal Development</a></li>
                    <li><a href="#"><i class="fa fa-joomla"></i>Joomla Development</a></li>
                  </ul>
                </div>
                <div class="col-lg-3 col-sm-12">
                  <h3 class="title">More Services</h3>
                  <ul>
                    <li><a href="#"><i class="fa fa-android"></i> Android App Development</a></li>
                    <li><a href="#"><i class="fa fa-mobile"></i>HTML5 App Development</a></li>
                    <li><a href="#"><i class="fa fa-paypal"></i>Paypal Store Integration</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
      
        </ul>
      </nav
      </div>
    
    <!--Menu HTML Code--> 
    
  </div>
  
  

                    
                    
                </div><!--/.navbar-collapse -->
            </div>
                </div>
            </div>
        </div>
    </nav>

   
                                

</div>


   

