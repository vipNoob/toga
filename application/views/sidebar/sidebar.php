<div class="sidebar" data-color="blue" data-image="assets/img/sidebar-1.jpg">
  <div class="sidebar-wrapper">
    <div class="logo">
      <a href="http://www.creative-tim.com" class="simple-text">
      Creative Tim
      </a>
    </div>
    <ul class="nav">
      <li class="<?php if($this->uri->segment(1)=="Admin_dashboard"){echo "active";}?>">
        <a href="<?php echo base_url() ?>Admin_dashboard">
          <i class="pe-7s-graph"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="<?php if($this->uri->segment(1)=="Students_list"){echo "active";}?>">
        <a href="<?php echo base_url() ?>Students_list">
          <i class="pe-7s-users"></i>
          <p>Students List</p>
        </a>
      </li>
      <li class="<?php if($this->uri->segment(1)=="Subject_list"){echo "active";}?>">
        <a href="<?php echo base_url() ?>Subject_list">
          <i class="pe-7s-note2"></i>
          <p>Subject List</p>
        </a>
      </li>
      <li class="<?php if($this->uri->segment(1)=="Courses_list"){echo "active";}?>">
        <a href="<?php echo base_url() ?>Courses_list">
          <i class="pe-7s-news-paper"></i>
          <p>Courses List</p>
        </a>
      </li>
      <li class="<?php if($this->uri->segment(1)=="Schedules_list"){echo "active";}?>">
        <a href="<?php echo base_url() ?>Schedules_list">
          <i class="pe-7s-hourglass"></i>
          <p>Schedules List</p>
        </a>
      </li>
      <li class="<?php if($this->uri->segment(1)=="Settings"){echo "active";}?>">
        <a href="<?php echo base_url() ?>Settings">
          <i class="pe-7s-settings"></i>
          <p>Settings</p>
        </a>
      </li>
    </ul>
  </div>
</div>