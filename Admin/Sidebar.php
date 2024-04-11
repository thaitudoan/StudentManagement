<?php
    echo ' 
    <aside id="sidebar">
    <div class="d-flex">
        <button id="toggle-btn" type="button">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="sidebar-logo">
            <a href="#">NVC</a>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="fa-solid fa-chart-line"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#teacher"
             aria-expanded="false" aria-controls="teacher">
                <i class="fa-solid fa-chalkboard-user"></i>
                <span>Teacher</span>
            </a>
            <ul id="teacher" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Teacher List</a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Add Teacher</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#student"
            aria-expanded="false" aria-controls="student">
                <i class="fa-solid fa-user-graduate"></i>
                <span>Student</span>
            </a>
            <ul id="student" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Student List</a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Add Student</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#users"
            aria-expanded="false" aria-controls="users">
                <i class="fa-solid fa-user"></i>
                <span>Users</span>
            </a>
            <ul id="users" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Users List</a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Add User</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
    '
?>