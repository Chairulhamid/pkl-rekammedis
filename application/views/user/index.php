 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800"><b><?= $title; ?></b> </h1>

     <div class="row">
         <div class="col-lg-8">
             <?= $this->session->flashdata('message'); ?>


         </div>

     </div>
     <div class="card mb-3 col-lg-12">
         <div class="row no-gutters">
             <div class="col-md-4">
                 <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img" alt="...">
             </div>
             <div class="col-md-8">
                 <div class="card-body">

                 <table border="0" cellpadding="10" cellspacing="0" >
        <tr>
            <th >Nama</th>
            <td>:</td>
            <td><?= $user['name']; ?></td>
            
        </tr>
        <tr>
            <th>Email</th>
            <td>:</td>
            <td><?= $user['email']; ?></td>
           
        </tr>
        <tr>
            <th>Dibuat</th>
            <td>:</td>
            <td><?= date('dF Y',$user['date_created']); ?></td>

        </tr>
    </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--container-fluid -->

    </div>
    <!-- End of Main Content -->