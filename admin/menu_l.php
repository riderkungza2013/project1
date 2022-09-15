 <aside class="main-sidebar">
   <!-- sidebar: style can be found in sidebar.less -->
   <section class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel">
       <div class="pull-left image">
         <img src="../m_img/<?php echo $m_img; ?>" class="img-circle" alt="User Image">
       </div>
       <div class="pull-left info">
         <p>คุณ <?php echo $m_name; ?></p>
         <!-- Status -->
         <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
       </div>
     </div>
     <ul class="sidebar-menu" data-widget="tree">
       <li>
         <a href="index.php"><i class="fa fa-home"></i>
           <span> หน้าหลัก</span>
         </a>
       </li>

       <li class="active">

         <a href="">
          <img src="../img2/employee1_1.png" width="30" class="rounded" alt="light "> &nbsp;
           </i> <span>จัดการข้อมูลระบบ</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-down pull-right"></i>
           </span>
         </a>
       </li>

       <li>
         <a href="member.php">
          <img src="../p_img/user2_1.png" width="30" class="rounded" alt="light "> &nbsp;
           <span> จัดการสมาชิก</span>
         </a>
       </li>
       <li>
         <a href="type.php">
          <img src="../p_img/p1.png" width="30" class="rounded" alt="light "> &nbsp;
           <span> จัดการประเภท </span>
         </a>
       </li>
       <li>
         <a href="bank.php">
          <img src="../p_img/money2.png" width="30" class="rounded" alt="light "> &nbsp;
           <span> จัดการธนาคาร </span>
         </a>
       </li>
       <li>
         <a href="product.php">
          <img src="../p_img/dugs1.png" width="30" class="rounded" alt="light "> &nbsp;
           <span> จัดการสินค้า </span>
         </a>
       </li>
       <li>
         <a href="member_profile.php">
          <img src="../p_img/User.png" width="30" class="rounded" alt="light "> &nbsp;
           <span> แก้ไขข้อมูลส่วนตัว </span>
         </a>
       </li>
       <li class="active">
         <a href="">
          <img src="../p_img/report.png" width="30" class="rounded" alt="light "> &nbsp;
           </i> <span>จัดการข้อมูลรายงาน</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-down pull-right"></i>
           </span>
         </a>



       <li>
         <a href="../logout.php" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่ ?');">
           <img src="../p_img/logout.png" width="30" class="rounded" alt="light "> &nbsp;
           <span> ออกจากระบบ</span>
         </a>
       </li>
     </ul>
   </section>
   <!-- /.sidebar -->
 </aside>