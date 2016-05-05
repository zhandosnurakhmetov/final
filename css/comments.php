<style media="screen">
/*
  Image credits:
  uifaces.com (http://uifaces.com/authorized)
*/

#login { display: none; }
.login,
.logout {
  position: absolute;
  top: -3px;
  right: 0;
}
.page-header { position: relative; }
.reviews {
  color: #555;
  font-weight: bold;
  margin: 10px auto 20px;
}
.notes {
  color: #999;
  font-size: 12px;
}
.media .media-object { max-width: 120px; }
.media-body { position: relative; }
.media-date {
  position: absolute;
  right: 25px;
  top: 25px;
}
.media-date li { padding: 0; }
.media-date li:first-child:before { content: ''; }
.media-date li:before {
  content: '.';
  margin-left: -2px;
  margin-right: 2px;
}
.media-comment { margin-bottom: 20px; }
.media-replied { margin: 0 0 20px 50px; }
.media-replied .media-heading { padding-left: 6px; }

.btn-circle {
  font-weight: bold;
  font-size: 12px;
  padding: 6px 15px;
  border-radius: 20px;
}
.btn-circle span { padding-right: 6px; }
.embed-responsive { margin-bottom: 20px; }
.tab-content {
  padding: 50px 15px;
  border: 1px solid #ddd;
  border-top: 0;
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
}
.custom-input-file {
  overflow: hidden;
  position: relative;
  width: 120px;
  height: 120px;
  background: #eee url('https://s3.amazonaws.com/uifaces/faces/twitter/walterstephanie/128.jpg');
  background-size: 120px;
  border-radius: 120px;
}
input[type="file"]{
  z-index: 999;
  line-height: 0;
  font-size: 0;
  position: absolute;
  opacity: 0;
  filter: alpha(opacity = 0);-ms-filter: "alpha(opacity=0)";
  margin: 0;
  padding:0;
  left:0;
}
.uploadPhoto {
  position: absolute;
  top: 25%;
  left: 25%;
  display: none;
  width: 50%;
  height: 50%;
  color: #fff;
  text-align: center;
  line-height: 60px;
  text-transform: uppercase;
  background-color: rgba(0,0,0,.3);
  border-radius: 50px;
  cursor: pointer;
}
.custom-input-file:hover .uploadPhoto { display: block; }
</style>
