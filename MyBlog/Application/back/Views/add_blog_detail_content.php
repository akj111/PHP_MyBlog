<!DOCTYPE html>
<html lang="zh-CN" class="ax-vertical-centered">
<head>
	<meta charset="UTF-8">
	<title>个人博客</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/MyBlog/css/bootstrap.min.css">
<link rel="stylesheet" href="/MyBlog/css/bootstrap.css"><!-- 去掉模糊框的暗色背景-->
<link rel="stylesheet" href="/MyBlog/css/bootstrap-theme.min.css">
<script src="/MyBlog/js/bootstrap.min.js"></script>
<script src="/MyBlog/jQuery/jquery-3.1.1.min.js"></script>
<script src="/MyBlog/js/bootstrap-dropdown.min.js"></script>

<script src="/MyBlog/js/jquery.min.js"></script>
<script src="/MyBlog/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/MyBlog/css/add_blog_detail.css">
<link rel="stylesheet" href="/MyBlog/css/common.css">
<script charset="utf-8" src="/MyBlog/js/kindeditor-4.1.10/kindeditor-min.js"></script>
<script charset="utf-8" src="/MyBlog/js/kindeditor-4.1.10/lang/zh_CN.js"></script>
<script charset="utf-8" src="/MyBlog/js/add_blog_detail.js"></script>
</head>


<body>
   
  <div class="form-group">
    <label for="firstname" class="col-sm-12 control-label add_blog">标题</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="title" placeholder="请输入标题">
    </div>

  </div>
  
   <div class="form-group">
    <label for="firstname" class="col-sm-12 control-label add_blog">分类</label>
    <div class="col-sm-2">

       <select class="form-control" id="type" >
        <option>    请选择类别   </option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    </div>
     <div class="col-sm-2">
 			<button type="button" class="btn btn-default" id="btn_add"   data-toggle="modal" data-target="#addModal">添加新分类</button>
    </div>
	<div class="post_blog">
			
 			<button type="button" class="btn btn-success">发布博文</button>
    </div>
  </div>
  

        <div class="article_content">
        	 <label for="firstname" class="col-sm-12 control-label add_blog">内容</label>
        	<textarea id="add_blog_detail"></textarea>
        </div>
        
    
</body>



 <!--------------------------------------添加的模糊框------------------------>  
                                 <form class="form-horizontal">   <!--保证样式水平不混乱-->   
                                        <!-- 模态框（Modal） -->
									<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														&times;
													</button>
													<h4 class="modal-title" id="myModalLabel">
														添加分类
													</h4>
												</div>
												<div class="modal-body">
												
										<!---------------------表单-------------------->
										 <div class="form-group">
											<label for="firstname" class="col-sm-2 control-label">分类名称</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="addTitle"  placeholder="请输入分类名称">
												<label class="control-label" for="addTitle" style="display: none;"></label>				
												</div>
										</div>
											
										
			
										<!---------------------表单-------------------->
									</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">关闭
													</button>
													<button type="button" class="btn btn-primary" id="addArticle">
														添加
													</button>
												</div>
											</div><!-- /.modal-content -->
										</div><!-- /.modal -->
									</div>

                                 </form>	
 								<!--------------------------------------添加的模糊框------------------------>  

</html>