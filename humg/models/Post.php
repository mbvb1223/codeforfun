<?php
include 'BaseModel.php';
class Post extends BaseModel
{
    public function getByCategoryId(int $id)
    {
        $conn = $this->getConnection();

        $sql = "SELECT * FROM posts WHERE category_id = $id";
        $result = $conn->query($sql);

        $posts = $result->fetch_all(MYSQLI_ASSOC);

        $conn->close();

        return $posts;
    }

    public function getAll()
    {
        $conn = $this->getConnection();

        $sql = "SELECT * FROM posts";
        $result = $conn->query($sql);

        $posts = $result->fetch_all(MYSQLI_ASSOC);

        $conn->close();

        return $posts;

    }

    public function save($title,$content,$created_at,$category_id,$thumbnail)
   {
       $conn = $this->getConnection();

       $sql = "insert into posts(title, content, created_at, category_id, thumbnail) values ('$title', '$content', '$created_at', '$category_id', '$thumbnail')";

       if ($conn->query($sql) === TRUE) {
           echo "New record created successfully";
       } else {
           echo "Error: " . $sql . "<br>" . $conn->error;
       }

       $conn->close();
  }

        public function update($id,$title,$content,$created_at,$category_id,$thumbnail)
   {
       $conn = $this->getConnection();

       $sql = "UPDATE posts SET title='$title',content='$content',created_at='$created_at',category_id='$category_id',thumbnail='$thumbnail' WHERE id=$id";

       $conn->query($sql);

       $conn->close();


    }

//    public function updateid()
//    {
//        $conn = $this->getConnection();
//        $sql = "SELECT * FROM posts WHERE id=$id";
//
//        $result = $conn->query($sql);
//
//        $posts = $result->fetch_all(MYSQLI_ASSOC);
//        $conn->close();
//
//        return true;
//    }

    public function getById($id)
    {
        $conn = $this->getConnection();

        $sql = "SELECT * FROM posts where id = $id";
        $result = $conn->query($sql);

        $posts = $result->fetch_all(MYSQLI_ASSOC);

        $conn->close();

        return $posts[0];
    }
    public function delete()
   {
       $conn = $this->getConnection();

       $sql = "DELETE FROM posts WHERE id=$id";
        $result = $conn->query($sql);

        $posts = $result->fetch_all(MYSQLI_ASSOC);

       $conn->close();

       return $posts;
   }
}

//$a = new Post();