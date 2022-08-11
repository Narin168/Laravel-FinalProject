{{-- @include('adminlayout.style')  --}}
<style>
    
.sidebar {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 300px;
    background-color: #fff;
    padding: 30px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    border-right: 2px solid #f1f1f1;
    transition: .3s;
}

.sidebar.active {
    width: 103px;
    overflow: hidden;
}

.sidebar.active .sidebar--item {
    display: none;
}

li {
    list-style: none;
}

a {
    text-decoration: none;
}

.sidebar--items a,
.sidebar--bottom-items a {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    font-size: 1.1rem;
    color: #000;
    padding: 10px;
    border-radius: 10px;
}

</style>
<div class="sidebar"> 
    <ul class="sidebar--items">  
    
        <li >     
            <a href="{{ url('/dashboard') }} " class=" text-green-300"> 
                <span class="icon icon-1"><i class="ri-layout-grid-line"></i></span>
                <span class="sidebar--item\ ">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="" >
                <span class="icon icon-2"><i class="ri-calendar-2-line"></i></span>
                <span class="sidebar--item">Records</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/admin') }}">
                <span class="icon icon-3"><i class="ri-user-2-line"></i></span>
                <span class="sidebar--item" style="white-space: nowrap;">Services</span>
            </a>
        </li>
        
    </ul>
    <ul class="sidebar--bottom-items">
        <li>
            <a href="#">
                <span class="icon icon-5"><i class="ri-line-chart-line"></i></span>
                <span class="sidebar--item">Logout</span>
            </a>
        </li>
    </ul>
</div>