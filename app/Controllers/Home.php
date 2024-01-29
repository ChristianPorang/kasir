<?php

namespace App\Controllers;
use App\Models\M_model;
use CodeIgniter\Controller;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Home extends BaseController
{
public function index() 
{
 if (!session()->get('id_user') > 0) {
 return redirect()->to('/Home/login');
 }
 $model =new M_model;
echo view ('template/header');
echo view ('navbar');
echo view ('dashboard');




}
public function hal()
{

    $model = new M_model;
    echo view ('template/header');
    echo view ('navbar');
    echo view ('hal/index');
    echo view ('template/footer');
    
    }
    public function hapus_barang($id)
  {
        $model=new M_model();
        $where=array('id'=>$id);
        $model->hapus('barang',$where);
        return redirect()->to('Home/barang'); 
  }
  public function hapuslap($id)
  {
        $model=new M_model();
        $where=array('id_Cart'=>$id);
        $model->hapus('laporan',$where);
        return redirect()->to('Home/laporan'); 
  }

    public function edit()
    {
        $model = new M_model;
        echo view ('template/header');
        echo view ('navbar');
        echo view ('edit');
        //  echo view ('template/footer');
    }
    public function delete()
    {
        $model = new M_model;
        echo view ('template/header');
        echo view ('navbar');
        echo view ('delete');
        //  echo view ('template/footer');
    }
    public function hapus_laporan($d)
    {
      
        $model=new M_model();
        $where=array('id_cart'=>$d);
        $model->hapus('hal/laporan',$where);
        return redirect()->to('home/laporan'); 
       
}      
public function laporanku()
{
    $model = new M_model;
    echo view ('template/header');
    echo view ('navbar');
    echo view ('laporan');
}

public function barang()
{

$model = new M_model;
echo view ('template/header');
echo view ('navbar');
echo view ('barang/barang');
echo view ('template/footer');
}
    public function laporan()
    {
        $model = new M_model;
        echo view ('template/header');
        echo view ('navbar');
        echo view ('barang/laporan');
        echo view ('template/footer');
    }
public function setting()
{

$model = new M_model;
echo view ('template/header');
echo view ('navbar');
echo view ('setting/pengaturan');
echo view ('template/footer');
}
 public function login()
    { 

        if (session()->get('id_user') > 0) {
             return redirect()->to('/Home');
         }
       echo view('template/header');
       echo view('login');
       //print_r(session()->get());
    //    echo view('template/footer');        

    }
    public function register()
    {
        if (session()->get('id_user') > 0) {
            return redirect()->to('/Home');
        }
        echo view ('register');
    }
    public function aksi_register()
    {
        // Assuming you have form validation and other necessary checks here
    
        $u = $this->request->getPost('u');
        $p = $this->request->getPost('p');
    
        // You may want to add more validation and security measures here
    
        $data = array(
            'username' => $u,
            'password' => md5($p),
            // Add other fields you want to store during registration
        );
    
        $model = new M_model();
    
        // Assuming getarray is a method in your model to fetch data
        $result = $model->simpan('user', $data);
    
        if ($result) {
            // Registration successful
            session()->setFlashdata('success', 'Registration successful! Please log in.');
            return redirect()->to('Home/login');
        } else {
            // Registration failed
            session()->setFlashdata('error', 'Registration failed. Please try again.');
            return redirect()->to('Home/register'); // Adjust the redirect URL accordingly
        }
    }
    
    public function aksi_login()
    {
        $u=$this->request->getPost('u');
        $p=$this->request->getPost('p');
        $where=array(
            'username'=>$u,
            'password'=>md5($p)
        );
        $model = new M_model();
        $kui=$model->getarray('user',$where);

        if ($kui>0) {
            session()->set('id_user',$kui['id_user']);
            session()->set('username',$kui['username']);
           
            return redirect()->to('/home');
        }else{
            return redirect()->to('Home/login');
        }
    }  


 public function keluar()
    {
        session()->destroy();
        return redirect()->to('Home/login');
    }
    //======================================== U S E R =================//
    public function user()
    {
        if (!session()->get('id_user') > 1) {
            return redirect()->to('/Home/login');
            }
    $model=new M_model();
    $kui['gas']=$model->tampil('user');
    echo view('template/header');
    echo view('navbar');
    echo view('user',$kui);
    echo view('template/footer');
   
}
  
    public function tambah_user()
    {
        if (!session()->get('id_user') > 1) {
            return redirect()->to('/Home/login');
            }
        $model=new M_model();
        $kui['sakas']=$model->tampil('user');
        echo view('template/header');
        echo view('navbar');
        echo view('tambah_user',$kui);
        echo view('template/footer');  
       
}
    
    public function aksi_u()
    {
        if (!session()->get('id_user') > 1) {
            return redirect()->to('/Home/login');
            }
        $model=new M_model();
        $username=$this->request->getPost('username');
        $password=$this->request->getPost('password');
        $level=$this->request->getPost('level');
        $data=array(
            'username'=>$username,
            'password'=>md5($password),
            'level'=>$level,
        );
        $model->simpan('user',$data);
        return redirect()->to('/Home/user');
      
}



    public function edit_user($id)
    {
        if (!session()->get('id_user') > 1) {
            return redirect()->to('/Home/login');
            }
        $model=new M_model();
        $where=array('id_user'=>$id);
        $kui['gas']=$model->getRow('user', $where);
        echo view('template/header');
        echo view('navbar');
        echo view('edit_user',$kui);
        echo view('template/footer'); 
       
}

    public function hapus_user($id)
    {
        if (!session()->get('id_user') > 1) {
            return redirect()->to('/Home/login');
            }
        $model=new M_model();
        $where=array('id_user'=>$id);
        $model->hapus('user',$where);
        return redirect()->to('Home/user'); 
       
}  
    
   

   
 



}