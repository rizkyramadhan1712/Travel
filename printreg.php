<?php  
include "koneksi.php";
$id = $_GET['id'];
$sql = "SELECT * FROM tbdriver WHERE username = '$id'";
$res = mysqli_query($connected, $sql);
$data = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <!-- <link rel="icon" href="admin/template/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="admin/template/assets/images/favicon.png" type="image/x-icon"> -->
    <title>Lotbus-Register</title>
    <link rel="stylesheet" type="text/css" href="admin/template/assets/css/fontawesome.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <style>
        body {
            text-align: center;
            margin: 0 auto;
            width: 650px;
            font-family: work-Sans, sans-serif;
            background-color: #f6f7fb;
            display: block;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        li {
            display: inline-block;
            text-decoration: unset;
        }

        a {
            text-decoration: none;
        }

        p {
            margin: 15px 0;
        }

        h5 {
            color: #444;
            text-align: left;
            font-weight: 400;
        }

        .text-center {
            text-align: center
        }

        .main-bg-light {
            background-color: #fafafa;
            //- box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);
        }

        .title {
            color: #444444;
            font-size: 22px;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 10px;
            padding-bottom: 0;
            text-transform: uppercase;
            display: inline-block;
            line-height: 1;
        }

        table {
            margin-top: 30px
        }

        table.top-0 {
            margin-top: 0;
        }

        table.order-detail,
        .order-detail th,
        .order-detail td {
            border: 1px solid #ddd;
            border-collapse: collapse;
        }

        .order-detail th {
            font-size: 16px;
            padding: 15px;
            text-align: center;
        }

        .footer-social-icon tr td img {
            margin-left: 5px;
            margin-right: 5px;
        }

        .temp-social td {
            display: inline-block;
        }

        .temp-social td i {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #24695c;
            //- padding:10px;
            background-color: #24695c3d;
            transition: all 0.5s ease;
        }

        .temp-social td:nth-child(n+2) {
            margin-left: 15px;
        }

        .deliver-status {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .deliver-status li {
            font-size: 20px;
            font-weight: 600;
            //- width:110px;
            width: 145px;
            position: relative;
        }

        .deliver-status li h6 {
            font-size: 14px;
            margin-top: 10px;
            margin-bottom: 0;
            color: #aba8a8;
            font-weight: 600;
            text-transform: capitalize;
        }

        .deliver-status li::before {
            content: "";
            position: absolute;
            top: 28%;
            left: 0;
            width: 100%;
            height: 5px;
            background-color: #24695c;
        }

        .deliver-status li:first-child::before,
        .deliver-status li:last-child::before {
            width: 50%
        }

        .deliver-status li:first-child::before,
        .deliver-status li:nth-child(2)::before {
            right: 0;
            left: unset;
        }

        .deliver-status li:nth-child(3)::before,
        .deliver-status li:last-child::before {
            background-color: #f8b028;
        }

        .deliver-status li .order-icon {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            margin-left: auto;
            margin-right: auto;
            background-color: #f8b028;
            position: relative;
            display: flex;
        }

        .deliver-status li .order-icon {
            color: #f8b028;
        }

        .deliver-status li .order-icon i {
            margin: auto;
            font-size: 14px;
        }

        .deliver-status li .order-icon.active {
            background-color: #24695c;
        }

        .deliver-status li .order-icon.active i {
            color: #ffffff;
        }
    </style>
</head>

<body style="margin: 20px auto;">
    <table align="center" border="0" cellpadding="0" cellspacing="0" style="padding:30px;background-color: #fff; -webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);width: 100%;">
        <tbody>
            <tr>
                <td>
                    <table align="center" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td><img src="admin/template/assets/images/logo/lotbus.png" alt="" style=";margin-bottom: 30px;"></td>
                            </tr>
                            <tr>
                                <td>
                                    <svg viewbox="1 -11 511.99988 511" xmlns="http://www.w3.org/2000/svg" style="fill:#2bbd2b;width: 110px;">
                                        <path d="m507.949219 232.933594-42.386719-56.027344 1.367188-70.25c.175781-8.953125-5.625-16.929688-14.199219-19.527344l-67.246094-20.367187-40.125-57.679688c-5.121094-7.363281-14.515625-10.417969-22.992187-7.46875l-66.367188 23.09375-66.371094-23.09375c-8.46875-2.945312-17.867187.101563-22.988281 7.46875l-40.125 57.679688-67.246094 20.367187c-8.574219 2.597656-14.375 10.574219-14.199219 19.527344l1.367188 70.25-42.386719 56.027344c-5.402343 7.136718-5.402343 16.996094 0 24.132812l42.386719 56.027344-1.367188 70.25c-.175781 8.953125 5.625 16.933594 14.199219 19.527344l67.246094 20.371094 40.125 57.675781c5.121094 7.363281 14.515625 10.417969 22.988281 7.46875l66.371094-23.09375 66.371094 23.09375c8.46875 2.945312 17.867187-.101563 22.988281-7.46875l40.125-57.679688 67.246094-20.367187c8.574219-2.597656 14.375-10.574219 14.199219-19.527344l-1.367188-70.25 42.386719-56.027344c5.402343-7.136718 5.402343-16.996094 0-24.132812zm-78.464844 61.550781c-2.707031 3.582031-4.132813 7.96875-4.046875 12.457031l1.207031 62.039063-59.40625 17.992187c-4.308593 1.304688-8.050781 4.023438-10.621093 7.71875l-35.429688 50.933594-58.613281-20.394531c-4.257813-1.484375-8.890625-1.484375-13.148438 0l-58.613281 20.394531-35.429688-50.933594c-2.570312-3.695312-6.3125-6.414062-10.621093-7.71875l-59.40625-17.992187 1.207031-62.039063c.085938-4.488281-1.339844-8.875-4.046875-12.453125l-37.4375-49.488281 37.4375-49.484375c2.710937-3.582031 4.136719-7.96875 4.046875-12.457031l-1.207031-62.039063 59.40625-17.992187c4.308593-1.304688 8.050781-4.023438 10.621093-7.71875l35.429688-50.933594 58.617188 20.394531c4.253906 1.480469 8.886718 1.480469 13.144531 0l58.613281-20.394531 35.433594 50.933594c2.570312 3.691406 6.3125 6.414062 10.617187 7.71875l59.40625 17.992187-1.207031 62.039063c-.085938 4.488281 1.339844 8.875 4.046875 12.453125l37.4375 49.488281zm-70.554687-122.816406c7.808593 7.808593 7.808593 20.472656 0 28.285156l-118.382813 118.378906c-7.792969 7.792969-20.464844 7.820313-28.285156 0l-59.191407-59.1875c-7.808593-7.8125-7.808593-20.476562 0-28.285156 7.8125-7.8125 20.476563-7.8125 28.285157 0l45.050781 45.046875 104.238281-104.238281c7.808594-7.8125 20.472657-7.8125 28.285157 0zm0 0"></path>
                                    </svg>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h2 class="title">Terima Kasih</h2>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="color:#aba8a8;">Pendaftaran sukses</p>
                                    <p style="color:#aba8a8;">Silakan Periksa data anda</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="border-top:1px solid #777;height:1px;margin-top: 30px;"></div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <table border="0" cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td>
                    <h2 class="title">Detail Data</h2>
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="order-detail" border="0" cellpadding="0" cellspacing="0" align="left">
              <tbody>
                <tr align="left">
                  <th>---------</th>
                  <th style="padding-left: 15px;">----------</th>
                  <th>------------</th>
                  <th>------------------</th>
                </tr>
                <tr>
                  <td ><img src="../assets/images/email-template/4.png" alt="" width="130"></td>
                  <td valign="top" style="padding-left: 15px;">
                    <h5 style="margin-top: 15px;"><span></span></h5>
                  </td>
                  <td valign="top" style="padding-left: 15px;">
                    <h5 style="font-size: 14px; color:#444;margin-top:15px;    margin-bottom: 0px;"><a class="btn btn-pill btn-primary" href="printtrans.php">Tambah Data Transpotasi</a></h5>
                    
                  </td>
                  <td valign="top" style="padding-left: 15px;">
                    <h5 style="font-size: 14px; color:#444;margin-top:15px"><b></b></h5>
                  </td>
                </tr>
                
                <tr>
                  <td colspan="2" style="line-height: 49px;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;">Username :</td>
                  <td class="price" colspan="3" style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"><b><?php echo $data['username']; ?></b></td>
                </tr>
                <tr>
                  <td colspan="2" style="line-height: 49px;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;">Nama :</td>
                  <td class="price" colspan="3" style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"><b><?php echo $data['nama']; ?></b></td>
                </tr>
                <tr>
                  <td colspan="2" style="line-height: 49px;font-family: Arial;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;">NIK : </td>
                  <td class="price" colspan="3" style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"><b><?php echo $data['nik']; ?></li></b></td>
                </tr>
                <tr>
                  <td colspan="2" style="line-height: 49px;font-size: 13px;color: #000000;                  padding-left: 20px;text-align:left;border-right: unset;">Tempat Lahir : </td>
                  <td class="price" colspan="3" style="                  line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"><b><?php echo $data['tmplahir']; ?></b></td>
                </tr>
                <tr>
                  <td colspan="2" style="line-height: 49px;font-size: 13px;color: #000000;                  padding-left: 20px;text-align:left;border-right: unset;">Alamat :</td>
                  <td class="price" colspan="3" style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"><b><?php echo $data['alamat']; ?></b></td>
                </tr>
                <tr>
                  <td colspan="2" style="line-height: 49px;font-size: 13px;color: #000000;                  padding-left: 20px;text-align:left;border-right: unset;">Jenis Kelamin : </td>
                  <td class="price" colspan="3" style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"><b><?php echo $data['jkel']; ?></b></td>
                </tr>
                <tr>
                  <td colspan="2" style="line-height: 49px;font-size: 13px;color: #000000;                  padding-left: 20px;text-align:left;border-right: unset;">Usia : </td>
                  <td class="price" colspan="3" style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"><b><?php echo $data['usia']; ?></b></td>
                </tr>
              </tbody>
            </table>

                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>