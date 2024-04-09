const hamburger = document.querySelector("#toggle-btn");

hamburger.addEventListener("click", function(){
    document.querySelector("#sidebar").classList.toggle("expand");  // xử lý sự kiện khi click btn toggle
});  

// Function để chỉnh sửa sinh viên
function editStudent(id) {
    // Thực hiện các thao tác chỉnh sửa, ví dụ như mở modal với thông tin sinh viên để chỉnh sửa
    console.log('Edit student with ID:', id);
}

// Function để xóa sinh viên
function deleteStudent(id) {
    // Hiển thị xác nhận hoặc gọi API để xóa sinh viên
    console.log('Delete student with ID:', id);
}
