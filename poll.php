<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="description"
      content="This is social network html5 template available in themeforest......"
    />
    <meta
      name="keywords"
      content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page"
    />
    <meta name="robots" content="index, follow" />
    <title>Poll | Select the correct one!</title>

    <!-- Stylesheets
    ================================================= -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="css/emoji.css" rel="stylesheet" />
    
    <!--Google Font-->
    <link
      href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i"
      rel="stylesheet"
    />
    <!-- Icons -->
    <link
      href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
    />

    <!--Favicon-->
    <!-- <link rel="shortcut icon" type="image/png" href="images/fav.png" /> -->
  </head>
  <body>
    <!-- Header
    ================================================= -->
    <header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button
              type="button"
              class="navbar-toggle collapsed"
              data-toggle="collapse"
              data-target="#bs-example-navbar-collapse-1"
              aria-expanded="false"
            >
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"
              ><a class="navbar-brand" href="index.php"><span>LOGO</span> </a></a
            >
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown">
                <a
                  href="index.php"
                  role="button"
                  aria-haspopup="true"
                  aria-expanded="false"
                  >Home <span></span
                ></a>
              </li>
              <li class="dropdown">
                <a
                  href="#"
                  class="dropdown-toggle"
                  data-toggle="dropdown"
                  role="button"
                  aria-haspopup="true"
                  aria-expanded="false"
                  >Newsfeed <span><img src="images/down-arrow.png" alt=""/></span
                ></a>
                <ul class="dropdown-menu newsfeed-home">
                  <li><a href="newsfeed.html">Newsfeed</a></li>
                  <li><a href="newsfeed-people-nearby.html">Poeple Nearly</a></li>
                  <li><a href="newsfeed-friends.html">My friends</a></li>
                  <li><a href="newsfeed-messages.php">Chatroom</a></li>
                  <li><a href="newsfeed-images.html">Images</a></li>
                  <li><a href="newsfeed-videos.html">Videos</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="poll.html">Poll</a></li>
              <li class="dropdown">
                <a
                  href="#"
                  class="dropdown-toggle"
                  data-toggle="dropdown"
                  role="button"
                  aria-haspopup="true"
                  aria-expanded="false"
                  >Timeline <span><img src="images/down-arrow.png" alt=""/></span
                ></a>
                <ul class="dropdown-menu login">
                  <li><a href="timeline.php">Timeline</a></li>
                  <li><a href="timeline-about.html">Timeline About</a></li>
                  <li><a href="timeline-album.php">Timeline Album</a></li>
                  <li><a href="timeline-friends.php">Timeline Friends</a></li>
                  <li><a href="edit-profile-basic.php">Edit: Basic Info</a></li>
                  <li><a href="edit-profile-work-edu.php">Edit: Work</a></li>
                  <li><a href="edit-profile-interests.html">Edit: Interests</a></li>
                  <li><a href="edit-profile-settings.html">Account Settings</a></li>
                  <li><a href="edit-profile-password.php">Change Password</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a
                  href="#"
                  class="dropdown-toggle pages"
                  data-toggle="dropdown"
                  role="button"
                  aria-haspopup="true"
                  aria-expanded="false"
                  >All Pages <span><img src="images/down-arrow.png" alt=""/></span
                ></a>
                <ul class="dropdown-menu page-list">
                  <li><a href="index.php">Landing Page 1</a></li>
                  <li><a href="index.php">Landing Page 2</a></li>
                  <li><a href="newsfeed.html">Newsfeed</a></li>
                  <li><a href="newsfeed-people-nearby.html">Poeple Nearly</a></li>
                  <li><a href="newsfeed-friends.html">My friends</a></li>
                  <li><a href="newsfeed-messages.php">Chatroom</a></li>
                  <li><a href="newsfeed-images.html">Images</a></li>
                  <li><a href="newsfeed-videos.html">Videos</a></li>
                  <li><a href="timeline.php">Timeline</a></li>
                  <li><a href="timeline-about.html">Timeline About</a></li>
                  <li><a href="edit-profile-basic.php">Edit: Basic Info</a></li>
                  <li><a href="timeline-friends.php">Timeline Friends</a></li>
                  <li><a href="timeline-album.php">Edit Profile</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                </ul>
              </li>
              <!-- <li class="dropdown"><a href="contact.html">Contact</a></li> -->
            </ul>
            <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search friends, photos, videos"
                />
              </div>
            </form>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
      </nav>
    </header>
    <!--Header End-->

    <div id="page-contents">
      <div class="container">
        <div class="row">
          <!-- Newsfeed Common Side Bar Left
          ================================================= -->
          <div class="col-md-3 static">
            <div class="profile-card">
              <img src="http://placehold.it/300x300" alt="user" class="profile-photo" />
              <h5><a href="timeline.php" class="text-white">Sarah Cruiz</a></h5>
              <a href="#" class="text-white"
                ><i class="ion ion-android-person-add"></i> 1,299 followers</a
              >
            </div>
            <!--profile card ends-->
            <ul class="nav-news-feed">
              <li>
                <i class="icon ion-ios-paper"></i>
                <div><a href="newsfeed.html">My Newsfeed</a></div>
              </li>
              <li>
                <i class="icon ion-ios-people"></i>
                <div><a href="newsfeed-people-nearby.html">People Nearby</a></div>
              </li>
              <li>
                <i class="icon ion-ios-people-outline"></i>
                <div><a href="newsfeed-friends.html">Friends</a></div>
              </li>
              <li>
                <i class="icon ion-chatboxes"></i>
                <div><a href="newsfeed-messages.php">Messages</a></div>
              </li>
              <li>
                <i class="icon ion-images"></i>
                <div><a href="newsfeed-images.html">Images</a></div>
              </li>
              <li>
                <i class="icon ion-ios-videocam"></i>
                <div><a href="newsfeed-videos.html">Videos</a></div>
              </li>
            </ul>
            <!--news-feed links ends-->
            <div id="chat-block">
              <div class="title">Chat online</div>
              <ul class="online-users list-inline">
                <li>
                  <a href="newsfeed-messages.php" title="Linda Lohan"
                    ><img
                      src="http://placehold.it/300x300"
                      alt="user"
                      class="img-responsive profile-photo"/><span class="online-dot"></span
                  ></a>
                </li>
                <li>
                  <a href="newsfeed-messages.php" title="Sophia Lee"
                    ><img
                      src="http://placehold.it/300x300"
                      alt="user"
                      class="img-responsive profile-photo"/><span class="online-dot"></span
                  ></a>
                </li>
                <li>
                  <a href="newsfeed-messages.php" title="John Doe"
                    ><img
                      src="http://placehold.it/300x300"
                      alt="user"
                      class="img-responsive profile-photo"/><span class="online-dot"></span
                  ></a>
                </li>
                <li>
                  <a href="newsfeed-messages.php" title="Alexis Clark"
                    ><img
                      src="http://placehold.it/300x300"
                      alt="user"
                      class="img-responsive profile-photo"/><span class="online-dot"></span
                  ></a>
                </li>
                <li>
                  <a href="newsfeed-messages.php" title="James Carter"
                    ><img
                      src="http://placehold.it/300x300"
                      alt="user"
                      class="img-responsive profile-photo"/><span class="online-dot"></span
                  ></a>
                </li>
                <li>
                  <a href="newsfeed-messages.php" title="Robert Cook"
                    ><img
                      src="http://placehold.it/300x300"
                      alt="user"
                      class="img-responsive profile-photo"/><span class="online-dot"></span
                  ></a>
                </li>
                <li>
                  <a href="newsfeed-messages.php" title="Richard Bell"
                    ><img
                      src="http://placehold.it/300x300"
                      alt="user"
                      class="img-responsive profile-photo"/><span class="online-dot"></span
                  ></a>
                </li>
                <li>
                  <a href="newsfeed-messages.php" title="Anna Young"
                    ><img
                      src="http://placehold.it/300x300"
                      alt="user"
                      class="img-responsive profile-photo"/><span class="online-dot"></span
                  ></a>
                </li>
                <li>
                  <a href="newsfeed-messages.php" title="Julia Cox"
                    ><img
                      src="http://placehold.it/300x300"
                      alt="user"
                      class="img-responsive profile-photo"/><span class="online-dot"></span
                  ></a>
                </li>
              </ul>
            </div>
            <!--chat block ends-->
          </div>

          <div class="col-md-7">
            <!-- Post Create Box
            ================================================= -->
            <div class="create-post post-width">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <div class="form-group">
                    <img src="http://placehold.it/300x300" alt="" class="profile-photo-md" />
                    <textarea
                      name="texts"
                      id="exampleTextarea"
                      cols="30"
                      rows="1"
                      class="form-control"
                      placeholder="Write what you wish"
                    ></textarea>
                  </div>
                </div>
                <div class="col-width col-sm-5">
                  <div class="tools">
                    <button
                      class="btn btn-primary publish-poll"
                      title="publish your poll"
                    >
                      Publish
                    </button>
                    <button
                      id="addOpt"
                      onclick="addOpt()"
                      class="btn btn-primary pull-right create-poll"
                      title="create options for your poll"
                    >
                      Add 
                    </button>
                    <button
                      id="hideOpt"
                      onclick="hideOpt()"
                      style="display: none;"
                      class="btn btn-primary pull-right create-poll"
                      title="create options for your poll"
                    >
                      Hide
                    </button>

                  </div>
                </div>
                <div id="dispOpt" style="display: none;" class="answers opt-col">
                  <!-- <div class="poll-options"> -->
                    <!-- <ol class="poll-items"> -->
                      <li>A 
                        <input type="text" class="option" placeholder="Write Something Here" />
                      </li>

                      <li id="opt2">B
                        <input type="text" class="option" placeholder="Write Something Here" /> 
                        <button class="pull-right" id="opt2add" onclick="addopt('opt3')">+</button>
                      </li>

                      <div id="opt3" style="display: none;">
                      <li>C
                        <input type="text" class="option" placeholder="Write Something Here" /> 
                        <button class="pull-right" id="opt3rem" onclick="delopt('opt3')">-</button> 
                        <button class="pull-right" id="opt3add" onclick="addopt('opt4')">+</button>
                      </li>
                      </div>

                      <div id="opt4" style="display: none;">
                      <li>D
                        <input type="text" class="option" placeholder="Write Something Here" /> 
                        <button class="pull-right" id="opt4rem" onclick="delopt('opt4')">-</button> 
                        <button class="pull-right" id="opt4add" onclick="addopt('opt5')">+</button>
                      </li>
                      </div>

                      <div id="opt5" style="display: none;">
                      <li>E
                        <input type="text" class="option" placeholder="Write Something Here" /> 
                        <button id="opt4rem" onclick="delopt('opt5')">-</button>
                      </li>
                      </div>
                    <!-- </ol> -->
                  <!-- </div> -->
                </div>
              </div>
            </div>
            <!-- Post Create Box End-->

            <!-- Post Content
            ================================================= -->
            <div class="post-content">
              <div class="post-container">
                <img
                  src="http://placehold.it/300x300"
                  alt="user"
                  class="profile-photo-md pull-left"
                />
                <div class="post-detail">
                  <div class="user-info">
                    <h5>
                      <a href="timeline.php" class="profile-link">Alexis Clark</a>
                      <span class="following">following</span>
                    </h5>
                    <p class="text-muted">Published a photo about 3 mins ago</p>
                  </div>
                  <div class="reaction">
                    how many users vote
                    <span class="pol-status"
                      >| Locked / Unlocked
                      <label class="switch">
                        <input type="checkbox" id="myDiv" onclick="myFunction()" />
                        <span class="sliders round" title="Lock/unlock your poll"></span>
                        <div id="poll_status">Unlock</div>
                      </label></span
                    >
                  </div>
                  <span class="delete-poll-icon"
                    ><button class="delete-poll-button"><i class="fa fa-trash-o"></i></button
                  ></span>
                  <div class="line-divider"></div>
                  <div class="post-text">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                      incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                      nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                      eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                      in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                  <div class="line-divider"></div>
                  <div class="radio-toolbar">
                    <input type="radio" id="radio-option1" name="radio-poll" value="A" />
                    <label for="radio-option1">A</label>

                    <input type="radio" id="radio-option2" name="radio-poll" value="B" />
                    <label for="radio-option2">B</label>

                    <input type="radio" id="radio-option3" name="radio-poll" value="C" />
                    <label for="radio-option3">C</label>
                  </div>
                  <p>&nbsp;</p>
                  <div class="delete-poll-bg"> </div>
                  <div id="delete-poll-pop">
                    Are you sure that you want to delete this poll ?
                    <div class="dd">
                      <span><button class="pop-yes">Yes</button></span>
                      <span><button class="pop-no">No</button></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Post Content
            ================================================= -->
            <div class="post-content">
              <video class="post-video" controls>
                <source src="videos/1.mp4" type="video/mp4" />
              </video>
              <div class="post-container">
                <img
                  src="http://placehold.it/300x300"
                  alt="user"
                  class="profile-photo-md pull-left"
                />
                <div class="post-detail">
                  <div class="user-info">
                    <h5>
                      <a href="timeline.php" class="profile-link">Sophia Lee</a>
                      <span class="following">following</span>
                    </h5>
                    <p class="text-muted">Updated her status about 33 mins ago</p>
                  </div>
                  <div class="reaction">
                    <a class="btn text-green"><i class="icon ion-thumbsup"></i> 75</a>
                    <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 8</a>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-text">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                      incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                      nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                      eu fugiat nulla pariatur.
                    </p>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-comment">
                    <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm" />
                    <p>
                      <a href="timeline.php" class="profile-link">Olivia </a> Lorem ipsum dolor sit
                      amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                      et dolore magna aliqua. <i class="em em-anguished"></i> Ut enim ad minim
                      veniam, quis nostrud
                    </p>
                  </div>
                  <div class="post-comment">
                    <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm" />
                    <p>
                      <a href="timeline.php" class="profile-link">Sarah</a> Lorem ipsum dolor sit
                      amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                      et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                  </div>
                  <div class="post-comment">
                    <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm" />
                    <p>
                      <a href="timeline.php" class="profile-link">Linda</a> Lorem ipsum dolor sit
                      amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                      et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                      ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                  </div>
                  <div class="post-comment">
                    <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm" />
                    <input type="text" class="form-control" placeholder="Post a comment" />
                  </div>
                </div>
              </div>
            </div>

            <!-- Post Content
            ================================================= -->
            <div class="post-content">
              <div class="post-container">
                <img
                  src="http://placehold.it/300x300"
                  alt="user"
                  class="profile-photo-md pull-left"
                />
                <div class="post-detail">
                  <div class="user-info">
                    <h5>
                      <a href="timeline.php" class="profile-link">Linda Lohan</a>
                      <span class="following">following</span>
                    </h5>
                    <p class="text-muted">Published a photo about 1 hour ago</p>
                  </div>
                  <div class="reaction">
                    <a class="btn text-green"><i class="icon ion-thumbsup"></i> 23</a>
                    <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 4</a>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-text">
                    <p>
                      <i class="em em-thumbsup"></i> <i class="em em-thumbsup"></i> Sed ut
                      perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                      laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                      quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                      quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                      dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,
                      qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
                      non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
                      quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem
                      ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                      Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                      nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas
                      nulla pariatur?
                    </p>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-comment">
                    <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm" />
                    <p>
                      <a href="timeline.php" class="profile-link">Cris </a> Lorem ipsum dolor sit
                      amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                      et dolore magna aliqua. Ut enim ad minim veniam <i class="em em-muscle"></i>
                    </p>
                  </div>
                  <div class="post-comment">
                    <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm" />
                    <input type="text" class="form-control" placeholder="Post a comment" />
                  </div>
                </div>
              </div>
            </div>

            <!-- Post Content
            ================================================= -->
            <div class="post-content">
              <img
                src="http://placehold.it/2000x1300"
                alt="post-image"
                class="img-responsive post-image"
              />
              <div class="post-container">
                <img
                  src="http://placehold.it/300x300"
                  alt="user"
                  class="profile-photo-md pull-left"
                />
                <div class="post-detail">
                  <div class="user-info">
                    <h5>
                      <a href="timeline.php" class="profile-link">John Doe</a>
                      <span class="following">following</span>
                    </h5>
                    <p class="text-muted">Published a photo about 2 hour ago</p>
                  </div>
                  <div class="reaction">
                    <a class="btn text-green"><i class="icon ion-thumbsup"></i> 39</a>
                    <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 2</a>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-text">
                    <p>
                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                      doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                      veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                      ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                      consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
                    </p>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-comment">
                    <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm" />
                    <p>
                      <a href="timeline.php" class="profile-link">Brian </a>Sed ut perspiciatis
                      unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                      totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                      architecto beatae vitae dicta sunt explicabo.
                    </p>
                  </div>
                  <div class="post-comment">
                    <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm" />
                    <p>
                      <a href="timeline.php" class="profile-link">Richard</a> Lorem ipsum dolor sit
                      amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                      et dolore magna aliqua.
                    </p>
                  </div>
                  <div class="post-comment">
                    <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm" />
                    <input type="text" class="form-control" placeholder="Post a comment" />
                  </div>
                </div>
              </div>
            </div>

            <!-- Post Content
            ================================================= -->
            <div class="post-content">
              <div class="google-maps">
                <div id="map" class="map"></div>
              </div>
              <div class="post-container">
                <img
                  src="http://placehold.it/300x300"
                  alt="user"
                  class="profile-photo-md pull-left"
                />
                <div class="post-detail">
                  <div class="user-info">
                    <h5>
                      <a href="timeline.php" class="profile-link">Sophia Lee</a>
                      <span class="following">following</span>
                    </h5>
                    <p class="text-muted">
                      <i class="icon ion-ios-location"></i> Went to Niagara Falls today
                    </p>
                  </div>
                  <div class="reaction">
                    <a class="btn text-green"><i class="icon ion-thumbsup"></i> 17</a>
                    <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-text">
                    <p>
                      At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                      praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                      excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                      officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum
                      quidem rerum facilis est et expedita distinctio.
                    </p>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-comment">
                    <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm" />
                    <p>
                      <a href="timeline.php" class="profile-link">Sarah </a>Sed ut perspiciatis
                      unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                      totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                      architecto beatae vitae dicta sunt explicabo. <i class="em em-blush"></i>
                      <i class="em em-blush"></i>
                    </p>
                  </div>
                  <div class="post-comment">
                    <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm" />
                    <input type="text" class="form-control" placeholder="Post a comment" />
                  </div>
                </div>
              </div>
            </div>

            <!-- Post Content
            ================================================= -->
            <div class="post-content">
              <img src="http://placehold.it/1920x1160" alt="" class="img-responsive post-image" />
              <div class="post-container">
                <img
                  src="http://placehold.it/300x300"
                  alt="user"
                  class="profile-photo-md pull-left"
                />
                <div class="post-detail">
                  <div class="user-info">
                    <h5>
                      <a href="timeline.php" class="profile-link">Anna Young</a>
                      <span class="following">following</span>
                    </h5>
                    <p class="text-muted">Published a photo about 4 hour ago</p>
                  </div>
                  <div class="reaction">
                    <a class="btn text-green"><i class="icon ion-thumbsup"></i> 2</a>
                    <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-text">
                    <p>
                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                      doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                      veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                      ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                    </p>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-comment">
                    <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm" />
                    <p>
                      <a href="timeline.php" class="profile-link">Julia </a>At vero eos et
                      accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                      voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                      sint occaecati cupiditate non provident, similique sunt in culpa qui officia
                      deserunt mollitia animi, id est laborum et dolorum fuga.
                    </p>
                  </div>
                  <div class="post-comment">
                    <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm" />
                    <input type="text" class="form-control" placeholder="Post a comment" />
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Newsfeed Common Side Bar Right
          ================================================= -->
          <div class="col-md-2 static">
            <div class="suggestions" id="sticky-sidebar">
              <h4 class="grey">Who to Follow</h4>
              <div class="follow-user">
                <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline.php">Diana Amber</a></h5>
                  <a href="#" class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline.php">Cris Haris</a></h5>
                  <a href="#" class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline.php">Brian Walton</a></h5>
                  <a href="#" class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline.php">Olivia Steward</a></h5>
                  <a href="#" class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline.php">Sophia Page</a></h5>
                  <a href="#" class="text-green">Add friend</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer
    ================================================= -->
    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="footer-wrapper">
            <div class="col-md-3 col-sm-3">
              <a href=""><img src="#" alt="" class="footer-logo"/>LOGO</a>
              <ul class="list-inline social-icons">
                <li>
                  <a href="#"><i class="icon ion-social-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="icon ion-social-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="icon ion-social-googleplus"></i></a>
                </li>
                <li>
                  <a href="#"><i class="icon ion-social-pinterest"></i></a>
                </li>
                <li>
                  <a href="#"><i class="icon ion-social-linkedin"></i></a>
                </li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h5>For individuals</h5>
              <ul class="footer-links">
                <li><a href="">Signup</a></li>
                <li><a href="">login</a></li>
                <li><a href="">Explore</a></li>
                <li><a href="">Finder app</a></li>
                <li><a href="">Features</a></li>
                <li><a href="">Language settings</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h5>For businesses</h5>
              <ul class="footer-links">
                <li><a href="">Business signup</a></li>
                <li><a href="">Business login</a></li>
                <li><a href="">Benefits</a></li>
                <li><a href="">Resources</a></li>
                <li><a href="">Advertise</a></li>
                <li><a href="">Setup</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h5>About</h5>
              <ul class="footer-links">
                <li><a href="">About us</a></li>
                <li><a href="">Contact us</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Terms</a></li>
                <li><a href="">Help</a></li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-3">
              <h5>Contact Us</h5>
              <ul class="contact">
                <li><i class="icon ion-ios-telephone-outline"></i>+91 123-456-789-0</li>
                <li><i class="icon ion-ios-email-outline"></i>Example@mail.com</li>
                <li><i class="icon ion-ios-location-outline"></i>Address</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright">
        <p>Tech Initiative Team © 2020. All rights reserved</p>
      </div>
    </footer>

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>

    <!-- Scripts
    ================================================= -->
    <!-- <script
      async
      defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&callback=initMap"
    ></script> -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/poll.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
