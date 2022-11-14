<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_klinik');

function get($query)
{
  global $conn;

  $query = mysqli_query($conn, $query);
  $rows = [];

  while ($row = mysqli_fetch_assoc($query)) {
    $rows[] = $row;
  }

  return $rows;
}

function get_where($query)
{
  global $conn;

  $query = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($query);
  return $row;
}

function create($query)
{
  global $conn;

  $query = mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function delete($query)
{
  global $conn;

  $query = mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

function register()
{
  global $conn;

  $username = 'kliniksyaraf';
  $password = password_hash('klinikhardhi', PASSWORD_DEFAULT);
  $created_at = date('Y-m-d H:i:s');

  mysqli_query($conn, "INSERT INTO users VALUES( default, '1', '$username', '$password', default, '$created_at')");
  return mysqli_affected_rows($conn);
}

function nameTop() {
  $query = 'SELECT users.group_id,users.username, group_id.name FROM group_id JOIN users ON group_id.id = users.group_id';
}

//Start Alert
class Flasher {
  // Menentukan Pesan ALert
  public static function setFlash($tPage ,$pesan, $aksi, $tipe) {
      $_SESSION['flash'] = [
          'tPage' => $tPage,
          'pesan' => $pesan,
          'aksi' => $aksi,
          'tipe' => $tipe
      ];
  }

  public static function flash() {
      if ( isset($_SESSION['flash']) ) {
          echo' <div class="alert alert-' . $_SESSION['flash']['tipe'] . '  alert-dismissible fade show" role="alert">
                  Data '. $_SESSION['flash']['tPage'] .' ' . $_SESSION['flash']['pesan'] . ' ' . $_SESSION['flash']['aksi'] . '
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div> ';
        unset ($_SESSION['flash']);
      }
  }
}
// End Alert