<?php
function set_flashdata($key = "", $val = "")
{
    if (!empty($key) && !empty($val)) {
        $_SESSION['_flashdata'][$key] = $val;
        return true;
    }
    return false;
}

function get_flashdata($key = "")
{
    if (!empty($key) && isset($_SESSION['_flashdata'][$key])) {
        $data = $_SESSION['_flashdata'][$key];
        unset($_SESSION['_flashdata'][$key]);
        return $data;
    } else {
        echo "<script> alert('Flash Message ]'{$key}\' is not defined. ') </script>";
    }
}

function pesan($key = "", $pesan = "")
{
    if ($key == "info") {
        set_flashdata('info', "<div class='alert alert-info alert-dismissible fade show' role='alert'>
        <strong>Info!</strong> {$pesan}
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>");
    } elseif ($key == "success") {
        set_flashdata('success', "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> {$pesan}
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>");
    } elseif ($key == "warning") {
        set_flashdata('warning', "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Warning!</strong> {$pesan}
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>");
    } elseif ($key == "danger") {
        set_flashdata('danger', "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Danger!</strong> {$pesan}
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>");
    }
}