<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <style>
        .container {
            margin-top: 50px;
        }

        .stretch-card>.card {
            width: 100%;
            min-width: 100%;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #d2d2dc;
            border-radius: 0;
        }

        .btn-info {
            color: #fff;
            background-color: #3da5f4;
            border-color: #3da5f4;
        }

        .btn {
            font-size: 0.875rem;
            line-height: 1;
            font-weight: 400;
            padding: .7rem 1.5rem;
            border-radius: 0.1275rem;
        }

        h6 {
            font-size: .9375rem;
        }
    </style>
</head>

<body>
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">

                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body text-center">
                            <div>
                                @if ($user->image)
                                @else
                                    <img src="https://img.icons8.com/bubbles/100/000000/administrator-male.png"
                                        class="img-lg rounded-circle mb-4" alt="profile image">
                                @endif
                                <h4>{{ $user->name }}</h4>
                                @if ($user->role)
                                    <p class="text-muted mb-0">{{ $user->role }}</p>
                                @else
                                    <p class="text-muted mb-0">Social Activist</p>
                                @endif
                            </div>
                            @if ($user->description)
                                <p class="mt-2 card-text">{{ $user->description }}</p>
                            @else
                                <p class="mt-2 card-text">
                                    For what reason would it be advisable for me to think about business content?
                                </p>
                            @endif
                            @if (Auth::user()->id != $user->id)
                                @if (\App\Models\Conversation::where('sender_id', Auth::user()->id)->where('receiver_id', $user->id)->orWhere('receiver_id', Auth::user()->id)->where('sender_id', $user->id)->count() === 0)
                                    <a href="{{ route('startConversation', $user->id) }}"
                                        class="btn btn-info btn-sm mt-3 mb-4">Start conversation</a>
                                @else
                                    <a href="/chat" class="btn btn-info btn-sm mt-3 mb-4">Send Message</a>
                                @endif
                            @endif
                            <div class="border-top pt-3">
                                <div class="row">
                                    <div class="col-4">
                                        <h6>{{ \App\Models\Posts::where('user_id', $user->id)->count() }}</h6>
                                        <p>Post</p>
                                    </div>
                                    <div class="col-4">
                                        <h6>455K</h6>
                                        <p>Followers</p>
                                    </div>
                                    <div class="col-4">
                                        <h6>34K</h6>
                                        <p>Likes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
