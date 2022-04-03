const button = document.getElementsByClassName('edit-btn');

function tampilkanModal(id, nama, email, role) {
  document.getElementById('nama').value = nama;
  document.getElementById('email').value = email;
  document.getElementById('role').value = role;
  document.getElementById('user-id').setAttribute('value', id);
}