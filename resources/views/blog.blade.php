@extends('layouts.static')
@section('homeContent')

    		<!-- BANNER -->
		<div class="blog_banner">
			
            </div>
            <!-- BANNER -->
    
            <!-- BODY -->
            <div class="blog_post_sec_all">
                <div class="container">
                    <div class="row">
                        <div class="cl-12 col-md-12 col-lg-9">
                            <div class="blog_post_left">
                                <div class="blog_post_sec">
                                    <div class="blog_post_top">
                                        <ul class="blog_post_top_ul">
                                            <li>
                                                <a href="blog.html">DATA SCIENCE AND DATABASES</a>
                                            </li>
                                            <li>1 Feb, 2020</li>
                                        </ul>
                                    </div>
                                    <div class="blog_post">
                                        <h1 class="blog_post_h1">Semi-supervised Image Classification with Unlabeled Data</h1>
                                        <div class="post_author_sec">
                                            <div class="post_author_left">
                                                <div class="post_author_img">
                                                    <img src="{{ asset('img/man1.jpg') }}" alt="image">
                                                </div>
                                                <div class="post_author_info">
                                                <a href="contact_me.html"><h4 class="post_author_title">David Martin</h4></a>
                                                    <P>Avi is a full-stack developer skilled with Python, Javascript and many other language</P>
                                                </div>
                                            </div>
                                            <div class="post_author_r8">
                                                <i class="fas fa-share-alt"></i>
                                            </div>
                                        </div>
                                        <p class="blog_post_text">
                                            Supervised learning has been at the forefront of research in computer vision and deep learning over the past decade.
                                        </p>
                                        <p class="blog_post_text">
                                            In a supervised learning setting, humans are required to annotate a large amount of dataset manually. Then, models use this data to learn complex underlying relationships between the data and label and develop the capability to predict the label, given the data. Deep learning models are generally data-hungry and require enormous amounts of datasets to achieve good performance. Ever-improving hardware and the availability of large human-labeled datasets has been the reason for the recent successes of deep learning.
                                        </p>
                                        <div class="spcl_line mar_b30">
                                                <p class="spcl_line_p">
                                                    If you think of gaining a new skill only as a means to a very specific end (i.e., getting promoted), your first step should be to adjust your mindset. You need to embrace continuous learning as an integral part of your professional development???today and for the rest of your career.
                                                    </p>
                                                </div>
                                        <p class="blog_post_text">
                                            One major drawback of supervised deep learning is that it relies on the presence of an extensive amount of human-labeled datasets for training. This luxury is not available across all domains as it might be logistically difficult and very expensive to get huge datasets annotated by professionals. While the acquisition of labeled data can be a challenging and costly endeavor, we usually have access to large amounts of unlabeled datasets, especially image and text data. Therefore, we need to find a way to tap into these underused datasets and use them for learning.
                                        </p>
                                        <h2 class="blog_post_h2">Transfer Learning from Pretrained Models</h2>
                                        <p class="blog_post_text">
                                            Transfer learning means using knowledge from a similar task to solve a problem at hand. In practice, it usually means using as initializations the deep neural network weights learned from a similar task, rather than starting from a random initialization of the weights, and then further training the model on the available labeled data to solve the task at hand.
                                        </p>
                                        <p class="blog_post_text">Transfer learning enables us to train models on datasets as small as a few thousand examples, and it can deliver a very good performance. Transfer learning from pretrained models can be performed in three ways:</p>
                                        <h3 class="blog_post_h3">1. Feature Extraction</h3>
                                        <p class="blog_post_text">Usually, the last layers of the neural network are doing the most abstract and task-specific calculations, which are generally not easily transferable to other tasks. By contrast, the initial layers of the network learn some basic features like edges and common shapes, which are easily transferable across tasks.</p>
                                        <p class="blog_post_text">The image sets below depict what the convolution kernels at different levels in a convolutional neural network (CNN) are essentially learning. We see a hierarchical representation, with the initial layers learning basic shapes, and progressively, higher layers learning more complex semantic concepts.
    
                                        </p>
                                        <h3 class="blog_post_h3">2. Fine-tuning</h3>
                                        <p class="blog_post_text">Alternatively, we can transfer the layers from a pretrained network and train the entire network on the available labeled data. This setup needs a little more labeled data because you are training the entire network and hence a large number of parameters. This setup is more prone to overfitting when there is a scarcity of data.</p>
                                        <h3 class="blog_post_h3">3. Two-stage Transfer Learning</h3>
                                        <p class="blog_post_text">
                                            This approach is my personal favorite and usually yields the best results, at least in my experience. Here, we train the newly attached layers while freezing the transferred layers for a few epochs before fine-tuning the entire network.
                                        </p>
                                        <h2 class="blog_post_h2">The Need for Semi-supervised and Unsupervised Methods</h2>
                                        <p class="blog_post_text">
                                            This usually works very well for most image classification tasks because we have huge image datasets like ImageNet that cover a good portion of possible image space???and usually, weights learned from it are transferable to custom image classification tasks. Moreover, the pretrained networks are readily available off the shelf, thus facilitating the process.
                                        </p>
                                        <p class="blog_post_text">
                                            However, this approach will not work well if the distribution of images in your task is drastically different from the images that the base network was trained on. For example, if you are dealing with grayscale images generated by a medical imaging device, transfer learning from ImageNet weights will not be that effective and you will need more than a couple of thousand labeled images for training your network to satisfactory performance.
                                        </p>
                                        <h2 class="blog_post_h2">Experiment</h2>
                                        <p class="blog_post_text">
                                            In this section, I will relate an experiment that empirically establishes the potential of unsupervised pre-training for image classification. This was my semester project for a Deep Learning class I took with Yann LeCun at NYU last spring.
                                        </p>
                                        <ul class="blog_post_ul">
                                            <li>Dataset. It is composed of 128K labeled examples, half of which are for training and the other half for validation. Furthermore, we are provided 512K unlabeled images. The data contains 1,000 classes in total.</li>
                                            <li>Unsupervised pre-training. AlexNet was trained for rotation classification using extensive data augmentation for 63 epochs. We used the hyperparameters documented by Rotnet in their paper.</li>
                                            <li>Classifier training. Features were extracted from the fourth convolution layer, and three fully connected layers were appended to it. These layers were randomly initialized and trained with a scheduled decreasing learning rate, and early stopping was implemented to stop training.</li>
                                        </ul>
                                        <div class="riview_post">
                                            <ul class="riview_post_ul">
                                                <li><i class="far fa-thumbs-up"></i>122 Like</li>
                                                <li><i class="far fa-comments"></i>10 Comment</li>
                                                <li><i class="far fa-share-square"></i>4 Share</li>
                                            </ul>
                                        </div>	
                                    </div>	
                                </div>
                                <div class="post_que">
                                    <h2 class="post_que_h2">UNDERSTANDING THE BASICS</h2>
                                    <!-- ITEAM -->
                                    <div class="post_que_single">
                                        <div class="post_que_single_top">
                                            <i class="fas fa-angle-right"></i>
                                            <p class="post_que_title">What is a chatbot and how does it work?</p>
                                        </div>
                                        <div class="post_que_single_btm dis_none">
                                            <p class="post_que_text">
                                                Chatbot terminology causes confusion. Chatbots are computer programs that respond to human messages. They are designed one of two ways: The first is based on rules that dictate the bot???s replies to specific commands. The second is with AI, where the goal is to comprehend the nuances of human language.
                                            </p>
                                        </div>
                                    </div>	
                                        <!-- ITEAM -->
    
                                        <!-- ITEAM -->
                                    <div class="post_que_single">
                                        <div class="post_que_single_top">
                                            <i class="fas fa-angle-right"></i>
                                            <p class="post_que_title">What are chatbots good for?</p>
                                        </div>
                                        <div class="post_que_single_btm dis_none">
                                            <p class="post_que_text">
                                                Some chatbots are designed to carry on casual conversations. Others act as customer service reps, providing deals, booking dates, and product support. There are also ???digital assistants??? that can do everything listed above while providing hundreds of extra features, like banking, home security, and traffic advice.
                                            </p>
                                        </div>
                                    </div>	
                                        <!-- ITEAM -->
    
                                        <!-- ITEAM -->
                                    <div class="post_que_single">
                                        <div class="post_que_single_top">
                                            <i class="fas fa-angle-right"></i>
                                            <p class="post_que_title">What are the types of chatbots?</p>
                                        </div>
                                        <div class="post_que_single_btm dis_none">
                                            <p class="post_que_text">
                                                Chatbot terminology causes confusion. Chatbots are computer programs that respond to human messages. They are designed one of two ways: The first is based on rules that dictate the bot???s replies to specific commands. The second is with AI, where the goal is to comprehend the nuances of human language.
                                            </p>
                                        </div>
                                    </div>	
                                        <!-- ITEAM -->
                                </div>
                                <div class="post_dtls_cmnt_sec mar_t20">
                                    <h2 class="post_dtls_title2 pad_b20">Comments</h2>
                                    <!-- comment -->
                                    <div class="cmnt_box_all">
                                        <div class="cmnt_box_top dis_flx">
                                            <div class="cmnt_box_top_left d-flex">
                                                <div class="cmnt_img mar_r15">
                                                    <img src="{{ asset('img/girl-cmnt.jpg') }}" alt="image">
                                                </div>
                                                <div class="cmnnt_name">
                                                    <div class="cmnt_name_left">
                                                        <h4 class="tchr_nam mar_b10">james smith</h4>
                                                    </div>
                                                    <div class="cmnt_name_right">
                                                        <p class="cmnt_name_right_p">05 Nov 2019 AT 12:00 AM</p>
                                                    </div>
                                                </div>
                                            </div>
                                                                
                                        </div>
    
                                        <div class="cmnnt_p pad_t10">
                                            <p>
                                                I recently completed another course from the 365 team "Data Science Boot Camp" where I was able to review my college course work taken many years ago in statistics along with an overview of programming languages (Python) I use regularly. 
                                            </p>
                                            <p class="post_reply mar_t5">Reply</p>
                                        </div>
                                    </div>
                                    <!-- comment -->
    
                                    <!-- reply -->
                                    <div class="cmnt_box_all reply_sec">
                                        <div class="cmnt_box_top dis_flx">
                                            <div class="cmnt_box_top_left d-flex">
                                                <div class="cmnt_img mar_r15">
                                                    <img src="{{ asset('img/girl2-cmnt.jpg') }}" alt="image">
                                                </div>
                                                <div class="cmnnt_name">
                                                    <div class="cmnt_name_left dis_fx_cntr">
                                                        <h4 class="tchr_nam mar_b10">Liam Dawson</h4>	
                                                    </div>
                                                    <div class="cmnt_name_right">
                                                        <p class="cmnt_name_right_p">06 Nov 2019 AT 11:23 PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                                                
                                        </div>
    
                                        <div class="cmnnt_p pad_t10">
                                            <p>
                                                Great course. Excellent introduction. Pretty fast paced. And while I was new to the field I had to do some exploration next to the explanations provided within the course.
                                            </p>
                                            <p class="post_reply mar_t5">Reply</p>
                                        </div>
                                    </div>
                                    <div class="cmnt_box_all reply_sec">
                                        <div class="cmnt_box_top d-flex">
                                            <div class="cmnt_box_top_left d-flex">
                                                <div class="cmnt_img mar_r15">
                                                    <img src="{{ asset('img/girl3-cmnt.jpg') }}" alt="image">
                                                </div>
                                                <div class="cmnnt_name">
                                                    <div class="cmnt_name_left dis_fx_cntr">
                                                        <h4 class="tchr_nam mar_b10">Jake Ball</h4>
                                                        <div class="cmnt_name_left_rating">
                                                        </div>	
                                                    </div>
                                                    <div class="cmnt_name_right">
                                                        <p class="cmnt_name_right_p">07 Nov 2019 AT 05:23 AM</p>
                                                    </div>
                                                </div>
                                            </div>
                                                                
                                        </div>
    
                                        <div class="cmnnt_p pad_t10">
                                            <p>
                                                Great to understand the mechanics, mathematics and also statistics in back of BI. I really liked it, and the exercises are great to confirm the knowledge.
                                            </p>
                                            <p class="post_reply mar_t5">Reply</p>
                                        </div>
                                    </div>
                                    <!-- reply -->
    
                                    <!-- comment -->
                                    <div class="cmnt_box_all">
                                        <div class="cmnt_box_top dis_flx">
                                            <div class="cmnt_box_top_left d-flex">
                                                <div class="cmnt_img mar_r15">
                                                    <img src="{{ asset('img/girl4-cmnt.jpg') }}" alt="image">
                                                </div>
                                                <div class="cmnnt_name">
                                                    <div class="cmnt_name_left">
                                                        <h4 class="tchr_nam mar_b10">Olly Stone</h4>
                                                    </div>
                                                    <div class="cmnt_name_right">
                                                        <p class="cmnt_name_right_p">11 Nov 2019 AT 09:12 AM</p>
                                                    </div>
                                                </div>
                                            </div>
                                                                
                                        </div>
    
                                        <div class="cmnnt_p pad_t10">
                                            <p>
                                                It was a decent match, I hate to say this because it was already very long but honestly it probably should have been 1 - 3 hours longer to include more explanations of SQL/MySQL, Python and Tableau.
                                            </p>
                                            <p class="post_reply mar_t5">Reply</p>
                                        </div>
                                    </div>
                                    <!-- comment -->
    
                                    <!-- iteam -->
                                    <div class="cmnt_box_all reply_sec">
                                        <div class="cmnt_box_top dis_flx">
                                            <div class="cmnt_box_top_left d-flex">
                                                <div class="cmnt_img mar_r15">
                                                    <img src="{{ asset('img/girl2-cmnt.jpg') }}" alt="image">
                                                </div>
                                                <div class="cmnnt_name">
                                                    <div class="cmnt_name_left">
                                                        <h4 class="tchr_nam mar_b10">Jofra Archer</h4>
                                                    </div>
                                                    <div class="cmnt_name_right">
                                                        <p class="cmnt_name_right_p">11 Dec 2019 AT 07:45 AM</p>
                                                    </div>
                                                </div>
                                            </div>
                                                                
                                        </div>
    
                                        <div class="cmnnt_p pad_t10">
                                            <p>
                                                I am on 50% of the course. So far I am very happy about the course. very succinct, practical and straight to the point. I am looking forward to complete this course so I can move onto data science
                                            </p>
                                            <p class="post_reply mar_t5">Reply</p>
                                        </div>
                                    </div>
                                    <!-- iteam -->
                                </div>
    
                                <!--WRITE COMMENT BOX -->
                                    <div class="cmnt_frm mar_t30">
                                        <h2 class="post_dtls_title2 pad_b20">Leave A Comment</h2>
                                    <div class="cmnt_frm_all">
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <div class="cmnt_input">
                                                    <p>NAME</p>
                                                    <input type="text" placeholder="Enter your name">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <div class="cmnt_input">
                                                    <p>E-MAIL</p>
                                                    <input type="text" placeholder="Enter your E-MAIL">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-12 col-lg-12">
                                                <div class="cmnt_input">
                                                    <p class="mar_b10">MESSAGE</p>
                                                    <textarea placeholder="Type your comment" name="message" required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="dtls_frm_btn mar_t20">
                                                <button class="btn1">send message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--WRITE COMMENT BOX -->
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-3">
                            <div class="blog_post_r8">
                                    <h4 class="trnd_artcl_h4">TRENDING ARTICLES</h4>
                                <div class="blog_post_r8_all">
                                    <!-- iteam -->
                                    <div class="blog_post_r8_item">
                                        <div class="blog_post_item_lft">
                                            <img src="{{ asset('img/man3.jpg') }}" alt="image">
                                        </div>
                                        <div class="blog_post_item_r8">
                                            <a href="">
                                                <h4 class="blog_post_item_r8_h4">
                                                    The Upwork 100: 3 Things You May Have Missed
                                                </h4>
                                            </a>
                                            <a href=""><p class="author_name2">-Amy Sept</p></a>
                                        </div>
                                    </div>
                                    <!-- iteam -->
    
                                        <!-- iteam -->
                                    <div class="blog_post_r8_item">
                                        <div class="blog_post_item_lft">
                                            <img src="{{ asset('img/man2.jpg') }}" alt="image">
                                        </div>
                                        <div class="blog_post_item_r8">
                                            <a href="">
                                                <h4 class="blog_post_item_r8_h4">
                                                    The Upwork 100: 3 Things You May Have Missed
                                                </h4>
                                            </a>
                                            <a href=""><p class="author_name2">-Amy Sept</p></a>
                                        </div>
                                    </div>
                                    <!-- iteam -->
    
                                        <!-- iteam -->
                                    <div class="blog_post_r8_item">
                                        <div class="blog_post_item_lft">
                                            <img src="{{ asset('img/man3.jpg') }}" alt="image">
                                        </div>
                                        <div class="blog_post_item_r8">
                                            <a href="">
                                                <h4 class="blog_post_item_r8_h4">
                                                    The Upwork 100: 3 Things You May Have Missed
                                                </h4>
                                            </a>
                                            <a href=""><p class="author_name2">-Amy Sept</p></a>
                                        </div>
                                    </div>
                                    <!-- iteam -->
    
                                        <!-- iteam -->
                                    <div class="blog_post_r8_item">
                                        <div class="blog_post_item_lft">
                                            <img src="{{ asset('img/man4.jpg') }}" alt="image">
                                        </div>
                                        <div class="blog_post_item_r8">
                                            <a href="">
                                                <h4 class="blog_post_item_r8_h4">
                                                    The Upwork 100: 3 Things You May Have Missed
                                                </h4>
                                            </a>
                                            <a href=""><p class="author_name2">-Amy Sept</p></a>
                                        </div>
                                    </div>
                                    <!-- iteam -->
    
                                        <!-- iteam -->
                                    <div class="blog_post_r8_item">
                                        <div class="blog_post_item_lft">
                                            <img src="{{ asset('img/man3.jpg') }}" alt="image">
                                        </div>
                                        <div class="blog_post_item_r8">
                                            <a href="">
                                                <h4 class="blog_post_item_r8_h4">
                                                    The Upwork 100: 3 Things You May Have Missed
                                                </h4>
                                            </a>
                                            <a href=""><p class="author_name2">-Amy Sept</p></a>
                                        </div>
                                    </div>
                                    <!-- iteam -->
    
                                        <!-- iteam -->
                                    <div class="blog_post_r8_item">
                                        <div class="blog_post_item_lft">
                                            <img src="{{ asset('img/man4.jpg') }}" alt="image">
                                        </div>
                                        <div class="blog_post_item_r8">
                                            <a href="">
                                                <h4 class="blog_post_item_r8_h4">
                                                    The Upwork 100: 3 Things You May Have Missed
                                                </h4>
                                            </a>
                                            <a href=""><p class="author_name2">-Amy Sept</p></a>
                                        </div>
                                    </div>
                                    <!-- iteam -->
                                </div>
                                <div class="course_price mar_t60">
                                    <div class="course_price_top">
                                        <p>Share this post</p>
                                    </div>
                                    <div class="course_price_main" style="padding: 30px 0px 30px 17px">
                                        <ul class="share_social_ul dis_flx">
                                            <li>
                                                <a class="fb" href="">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="google" href="">
                                                    <i class="fab fa-google-plus-g"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="instgrm" href="">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="twtr" href="">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="skpye" href="">
                                                    <i class="fab fa-skype"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="utube" href="">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            </li>
                                    <!-- 		<li>
                                                <a class="lnkdn" href="">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="pinstr" href="">
                                                    <i class="fab fa-pinterest"></i>
                                                </a>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="post_tags">
                                    <h3 class="post_tags_h3">Popular Tags</h3>
                                    <ul class="post_tags_ul">
                                        <li>
                                            <a href="">Design</a>
                                        </li>
                                        <li>
                                            <a href="">UI/UX</a>
                                        </li>
                                        <li>
                                            <a href="">Database</a>
                                        </li>
                                        <li>
                                            <a href="">PHP</a>
                                        </li>
                                        <li>
                                            <a href="">Lareval</a>
                                        </li>
                                        <li>
                                            <a href="">UI/UX</a>
                                        </li>
                                        <li>
                                            <a href="">Design</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BODY -->

@endsection