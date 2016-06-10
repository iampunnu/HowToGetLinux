<?php $title_index = " Get Linux | HomeGetLinux : Why Linux is fast and light OS?  "; ?>
 <!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
     <meta name="google-site-verification" content="5Y5Rf1Gjosn_poKNupgWw2ZINrdsFzFji4Yj76hwYFg" />
 	 <title><?php echo $title_index; ?></title>
      	<meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
         <meta name="keywords" content="how to, linux, howtoget,howtogetlinux,opensource,how to download linux,download linux,
                                                                    free linux,what is linux, ubuntu, archlinux,kali,fadora,why linux is better, why linux is
                                                                    best,debian,free download linux,download free linux,kernel,whylinux,index,about us,get
                                                                    getstarted,know linux,tips and tricks,contact us,open source,package manager,ubuntu
                                                                    software center "/>
        <meta name="description" content="Linux is a lightning fast and powerful OS, used everywhere to more ..">

<?php require('header.php');?>
<?php  require('Style.css'); ?>

<div class="hr1" style="margin-bottom:40px;"></div>

<style type="text/css">
  h4 { padding-left: 70px;
          padding-right: 70px;
          padding-top: 25px;
          padding-bottom: 20px;
         line-height: 125%;
         font-family: arial;
         font-size: 19px;
         letter-spacing: .9px;
         color: black;
         }
    h1 {     
         color: red;
         text-align: center;
     }  
  
  </style>
  <!-- Start Page Banner -->
		<div class="page-banner" style="padding:20px 0; background: url(images/slide-02-bg.jpg) center #f9f9f9;">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2>Why Get Linux ? </h2>
 					</div>
					<div class="col-md-6">
						<ul class="breadcrumbs">
							<li><a href="index.php">Home</a></li>
                            <li><a href="whylinux.php">Why Linux</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- End Page Banner -->
<div class="hr1" style="margin-bottom:25px;"></div>		

  
 <h1 style="font-size:30px;"> Why Linux is fast and light OS? </h1>
<h4>
 <em style="color:green;font-size:30px;"> </em> the software/package management in Linux is far superior to what you have 
 in Windows and that contributes hugely to the general snappiness of Linux based OSes. Now, let's get into the details.
 <div class="hr1" style="margin-bottom:15px;"></div>
 <em style="color:green;font-size:25px;"> 1. </em> One of the more hidden benefits to linux is that applications share files 
  better than windows. So instead of DLLs like in windows, linux uses .so files, or "shared objects". There are also .ko files,
  which are kernel objects, somewhat like drivers in windows.  
<div class="hr1" style="margin-bottom:8px;"></div>
<em style="color:green;font-size:25px;"> 2. </em> A Windows application might depend on a very specific version of a DLL. The
  person who writes the application doesn't know what version of windows you will be installing it on and if that particular DLL  will
  be present in your system. So the easiest solution is to just include the correct DLL with the application. Effect: installers
  are much larger, C drive is fuller, and more ram is used.
  <div class="hr1" style="margin-bottom:8px;"></div>
  <em style="color:green;font-size:25px;"> 3. </em> Linux does it differently. When you ask to install Midori web browser for 
  instance, apt-get (or the software center front end) checks the package for a list of dependencies. Instead of including all the 
  files, Midori just says what it depends on.
  <div class="hr1" style="margin-bottom:8px;"></div>
     <em style="color:green;font-size:25px;"> 4. </em> So apt-get checks the system and sees that fileX.so.1 is already installed,
      which is one of the dependencies, so it doesn't need to fetch it from the central software repository. It then notices that Midori 
      needs another file, which is not installed yet.<br> So it checks the software repository for a version that matches, or one that is
      newer. It installs that. And so on. Once the dependencies are satisfied, it installs the application itself. Result:
      Software can be installed very quickly and doesn't take up as much space or ram.
  <div class="hr1" style="margin-bottom:8px;"></div>
     <em style="color:green;font-size:25px;"> 5. </em> The apt-get system also keeps track of how many applications need 
     fileX.so.1, so that if you remove Midori, it doesn't remove fileX.so.1, unless nobody else is using it. So Linux has pretty good 
     house keeping skills.
  <div class="hr1" style="margin-bottom:8px;"></div>
  <img src="FastLinux.jpg" alt="Fast Linux">




</h4>
<?php require('footer.php');?> 
 
