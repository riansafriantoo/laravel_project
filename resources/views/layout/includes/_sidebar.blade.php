        <div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="/dashboard" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						@if(auth()->user()->role == 'admin')
                        	<li><a href="/book" class=""><i class="lnr lnr-book"></i> <span>Daftar Buku</span></a></li>
							<li><a href="/bookAuthor" class=""><i class="lnr lnr-user"></i> <span>Daftar Penulis Buku</span></a></li>
							<li><a href="/userList" class=""><i class="lnr lnr-list"></i> <span>Daftar User</span></a></li>
						@endif
					</ul>
				</nav>
			</div>
		</div>