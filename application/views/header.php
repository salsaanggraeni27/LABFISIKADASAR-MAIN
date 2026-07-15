<nav class="main-nav transparent stick-fixed">
    <div class="container">
        <div class="full-wrapper relative clearfix">

            <!-- Logo -->

            <!-- Mobile nav bars -->
            <div class="mobile-nav">
                <i class="fa lnr lnr-menu"></i>
            </div>

            <!-- Main Menu -->
            <div class="nav-wrapper large-nav">
                <ul class="clearlist local-scroll">

                    <!-- Multiple column menu example -->
                    <?php
                    $query = $this->db->get_where('tbl_navbar', array('navbar_parent_id' => 0));
                    if($query->num_rows() > 0):
                        ?>
                        <?php foreach ($query->result() as $row):?>
                        <?php
                        $nav_id=$row->navbar_id;
                        $query2 = $this->db->get_where('tbl_navbar', array('navbar_parent_id' => $nav_id));
                        ?>
                            <li>
                                <a href="<?php echo site_url($row->navbar_slug);?>"><?php echo $row->navbar_name;?></a>
                            </li>
                    <?php endforeach;?>
                    <?php else:?>
                        <li>
                            <a href="#">Belum ada menu</a>
                        </li>
                    <?php endif;?>
                    <!-- End Multiple column menu example -->
                </ul>
            </div>
            <!-- End Main Menu -->


        </div>
    </div>
</nav>