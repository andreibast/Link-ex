    public function editBook(){

        $mysqli3 = new mysqli("localhost","root","","books.app") or die(mysqli_error($mysqli3));

        $this->id = $_POST['id'];

        $this->title = $_POST['edit_title'];
        $this->authors = $_POST['edit_authors'];
        $this->category = $_POST['edit_category'];
        $this->picture = $_FILES['edit_picture'];
        $this->description = $_POST['edit_description'];

        if(isset($_FILES['edit_picture']) &&  isset($_POST['edit_title'])){
            clearstatcache();
            $updatePath = '../../../public/images/user_books_covers/' . basename($_FILES['edit_picture']['name']);
            $updatePathLink = '../../public/images/user_books_covers/' . basename($_FILES['edit_picture']['name']);
            $this->picture_message = "<br>A link has been given!";

            $moveUploaded = move_uploaded_file($_FILES['edit_picture']['tmp_name'], $updatePath);

            $queryResult = $mysqli3->query("SELECT * FROM books WHERE id=$this->id");
            $resultedRows = $queryResult->fetch_array();
            $fetchedLink = $resultedRows['picture'];
            $fetchedFileName = basename($fetchedLink);
            
            clearstatcache();

            if ($moveUploaded) {
                $this->picture_message = "<br>The new cover picture has been submitted successfully!<br> $fileExists";
                $this->alert_update_color = 'success';
            }elseif(str_contains($fetchedLink, 'user_books_covers') && file_exists($fetchedLink)){
                $updatePathLink = $fetchedLink;
                $this->picture_message = "<br>The text has been updated!elseif1<br>" . $fetchedLink;
                $this->alert_update_color = 'success';
            }else{
                $updatePathLink = "../../public/images/150x212.png";
                $this->picture_message = "<br>The default cover picture has been assigned!else<br>" . $fetchedLink;
                $this->alert_update_color = 'warning';
            }
        }

       $mysqli3->query("UPDATE books SET title='$this->title', authors='$this->authors', category='$this->category', picture='$updatePathLink', description='$this->description'  WHERE id=$this->id") ;
    
        $_SESSION['message'] = "The book has been updated!" .  $this->picture_message;
        $_SESSION['msg_type'] = $this->alert_update_color;

        $url = "../../../resources/views/adminarea/admin.php?admin_edit=$this->id";
        $url = str_replace(PHP_EOL, '', $url);
    
        header("location: $url");
        
    }

    public function deleteBook(){

        $id = $_POST['id'];
        $picture_snatched_path =  $_POST['picturePath'];
    
        $exploded_path = basename($picture_snatched_path);
        $exploded_path_string = "C:/xampp/htdocs/books.andreibasturescu/public/images/user_books_covers/" . $exploded_path;
        
        if(file_exists($exploded_path_string)){
            unlink($exploded_path_string);
        }
        
        $_SESSION['message'] = "The book has been deleted!";
    
    
        $mysqli = new mysqli("localhost","root","","books.app") or die(mysqli_error($mysqli));
    
        $mysqli->query("DELETE FROM books WHERE id= $id") or die($mysqli->error());
        $mysqli->query("ALTER TABLE books AUTO_INCREMENT=1") or die($mysqli->error());
    
        $_SESSION['msg_type'] = "danger";
    
        header("location: ../../../resources/views/adminarea/admin.php?admin_manage=Manage+Books&admin_edit=Edit+Book");

    }


