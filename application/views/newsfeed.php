<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-header">
                <h1>
                    News Feed
                </h1>
            </div>
            <?php for ($i = 0;
                       $i < count($result);
                       $i++): ?>
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>
                                <a href="/page/bookshelf/<?php echo $result[$i]->friend_id; ?>">
                                    <Img border="0"
                                        src="http://graph.facebook.com/<?php echo $result[$i]->friend_fbid; ?>/picture?width=40&height=40"
                                        width="40" height="40" class="img-rounded">
                                </a>
                                &nbsp;
                                <?php echo $result[$i]->friend_name . ' added a book to his bookshelf.'; ?>
                            </h4>
                        </div>
                        <div class="panel-body text-center">
                            <Img
                                src="http://bks5.books.google.com/books?id=<?php echo $result[$i]->google_id; ?>&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api"
                                class="img-rounded" style="min-height:180px;height:180px;">

                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle"><span
                                        class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li class="alert-success">
                                        <a data-friendId="<?php echo $result[$i]->friend_id; ?>" data-bookId="<?php echo $result[$i]->google_id; ?>" onclick="alert('Implement book loan!')">Loan Book</a>
                                    </li>
                                    <li class="divider">
                                    </li>
                                    <li>
                                        <a href="/page/book/<?php echo $result[$i]->book_id; ?>">Book's Profile</a>
                                    </li>
                                    <li>
                                        <a onclick="alert('Broadcasting a book means posting to friends that you have it (maybe on FB, think about it...)')">Broadcast
                                            Book</a>
                                    </li>
                                </ul>
                            </div>

                            <h4><?php echo $result[$i]->book_name; ?></h4>
                            <h6><?php echo $result[$i]->book_author; ?></h6>

                        </div>

                        <div class="panel-footer text-center">
                            <p>Added at: <?php echo $result[$i]->book_added_date; ?></p>
                        </div>
                    </div>
                </div>
            <?php
            endfor;
            ?>
        </div>
    </div>
</div>

