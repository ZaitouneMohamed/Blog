<div class="card-body p-0">
    <ul class="nav nav-pills flex-column">
        <li class="nav-item active">
            <a href="{{route('admin.messages.index')}}" class="nav-link">
                <i class="fas fa-inbox"></i> Inbox
                <span class="badge bg-primary float-right">
                    {{\App\Models\Message::where('statue',0)->count()}}
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="far fa-envelope"></i> Readed
                <span class="badge bg-primary float-right">
                    {{\App\Models\Message::where('statue',1)->count()}}
                </span>
            </a>
        </li>
    </ul>
</div>