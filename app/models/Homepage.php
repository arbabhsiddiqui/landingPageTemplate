<?php
class Homepage
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
// update main section
    public function Edit($data)
    {
        //  load query

        $this->db->query("UPDATE home_page SET bg_image=:bg_image, main_image=:main_image, disclaimer_heading=:disclaimer_heading, disclaimer_msg=:disclaimer_msg, title=:title,
        sub_title=:sub_title, seo_title=:seo_title, seo_keyword=:seo_keyword, seo_desc=:seo_desc, og_title=:og_title, og_desc =:og_desc,
        og_image=:og_image, google_tag_manager = :google_tag_manager, facebook_pixel = :facebook_pixel, main_email = :main_email WHERE id=:id");
        // bind values
        $this->db->bind(":bg_image", $data['bg_image']);
        $this->db->bind(":main_image", $data['main_image']);
        $this->db->bind(":disclaimer_heading", $data['disclaimer_heading']);
        $this->db->bind(":disclaimer_msg", $data['disclaimer_msg']);
        $this->db->bind(":title", $data['title']);
        $this->db->bind(":sub_title", $data['sub_title']);
        $this->db->bind(":seo_title", $data['seo_title']);
        $this->db->bind(":seo_keyword", $data['seo_keyword']);
        $this->db->bind(":seo_desc", $data['seo_desc']);
        $this->db->bind(":og_title", $data['og_title']);
        $this->db->bind(":og_desc", $data['og_desc']);
        $this->db->bind(":og_image", $data['og_image']);
        $this->db->bind(":google_tag_manager", $data['google_tag_manager']);
        $this->db->bind(":facebook_pixel", $data['facebook_pixel']);
        $this->db->bind(":main_email", $data['main_email']);
        $this->db->bind(":id", $data['id']);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // update social links
    public function socialLinksUpdate($data)
    {
        
        //  load query
        $this->db->query("UPDATE home_page SET facebook_link=:facebook_link, twitter_link=:twitter_link, instagram_link=:instagram_link,
        linkedin_link=:linkedin_link, youtube_link=:youtube_link, whatsapp=:whatsapp WHERE id=:id");
        // bind values
        $this->db->bind(":facebook_link", $data['facebook_link']);
        $this->db->bind(":twitter_link", $data['twitter_link']);
        $this->db->bind(":instagram_link", $data['instagram_link']);
        $this->db->bind(":linkedin_link", $data['linkedin_link']);
        $this->db->bind(":youtube_link", $data['youtube_link']);
        $this->db->bind(":whatsapp", $data['whatsapp']);
        $this->db->bind(":id", $data['id']);
        // execute query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // update fields
    public function fieldsDropdownUpdate($data)
    {
        //  load query
        $this->db->query("UPDATE home_page SET field1=:field1, field2=:field2, field3=:field3, field4=:field4, field5=:field5, field6=:field6,
        dropdown1 =:dropdown1, dropdown2 =:dropdown2, dropdown3 =:dropdown3 WHERE id=:id");
        // bind values
        $this->db->bind(":field1", $data['field1']);
        $this->db->bind(":field2", $data['field2']);
        $this->db->bind(":field3", $data['field3']);
        $this->db->bind(":field4", $data['field4']);
        $this->db->bind(":field5", $data['field5']);
        $this->db->bind(":field6", $data['field6']);
        $this->db->bind(":dropdown1", $data['dropdown1']);
        $this->db->bind(":dropdown2", $data['dropdown2']);
        $this->db->bind(":dropdown3", $data['dropdown3']);
        $this->db->bind(":id", $data['id']);

        // execute query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    // update colors
    public function colorUpdate($data)
    {
        //  load query
        $this->db->query("UPDATE home_page SET base_color=:base_color, text_color=:text_color, border_color=:border_color, btn_color=:btn_color, accent_color=:accent_color, bg_color=:bg_color WHERE id=:id");
        // bind values
        $this->db->bind(":base_color", $data['base_color']);
        $this->db->bind(":text_color", $data['text_color']);
        $this->db->bind(":border_color", $data['border_color']);
        $this->db->bind(":btn_color", $data['btn_color']);
        $this->db->bind(":accent_color", $data['accent_color']);
        $this->db->bind(":bg_color", $data['bg_color']);
        $this->db->bind(":id", $data['id']);

        // execute query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }



    // get data by id from homepage

    public function getDataById($id)
    {
        $this->db->query("SELECT * FROM home_page WHERE id =:id");
        $this->db->bind(":id", $id);
        $row = $this->db->single();
        return $row;
    }

    
}
