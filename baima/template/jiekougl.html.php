<!--{template header}-->


		

<div id="mains">
	<div id="dxjkjkgl">
        <div class="kftips" style="background:url(baima/template/images/kfimgbg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/kfimg.png" width="35" height="35"></div>
            <div class="fl kftipstext">����ר���ͷ�רԱ��{$yingxiaoinfo[username]}����ϵ�绰��{$yingxiaoinfo[sjh]}</div>
        </div>
        <div class="kfsitetips" style="background:url(baima/template/images/kfsitebg.png) repeat-x;">
        	<div class="fl"><img src="baima/template/images/siteimg.png" width="20" height="25"></div>
            <div class="fl kfsitetipstext">��ǰλ�ã����Ž���-�������</div>
        </div>
        <div class="colorred fl" style="font-size:14px; font-weight:bold; margin-top:10px;">
        	<div>ע�����1.ע��ӿڵ�ַ��Ҫд��</div>
          	<div style="margin-left:75px;">2.�ύ��ʽ����httpЭ��post�ύ</div>
          	<div style="margin-left:75px;">3.���б��������GBK��ʽ</div>
        </div>
        <div class="v1">
            <div>
                <span class="cp" onClick="showjksmwd()"><span id="jksmwd1"><img src="baima/template/images/jksmwd1.png" width="100" height="33"></span><span id="jksmwd2" style="display:none;"><img src="baima/template/images/jksmwd2.png" width="100" height="28"></span></span>
                <span class="cp" onClick="showdmsl()" onMouseMove="showdsmllist()" onMouseOut="closedsmllist()"><span id="dmsl1" style="display:none;"><img src="baima/template/images/dmsl1.png" width="100" height="33"></span><span id="dmsl2"><img src="baima/template/images/dmsl2.png" width="100" height="28"></span></span>
                <div id="dsmllist" style="position:absolute; margin-left:108px; margin-top:-4px; background-color:#d2f2fd; font-family:'΢���ź�'; font-size:14px; display:none;" onMouseMove="showdsmllist()" onMouseOut="closedsmllist()">
                	<div class="cp" style="border:#83bbd9 1px solid; width:98px; height:20px; padding-top:5px;" onClick="showphp()">
                    	PHP����ʾ��
                    </div>
                    <div class="cp" style="border:#83bbd9 1px solid; width:98px; height:20px; padding-top:5px;" onClick="showjava()">
                    	java����ʾ��
                    </div>
                    <div class="cp" style="border:#83bbd9 1px solid; width:98px; height:20px; padding-top:5px;" onClick="showasp()">
                    	asp����ʾ��
                    </div>
                </div>
            </div>
            <div class="v2">
                <div id="mythetable">
                    <div id="table">
                    	<ul id="jksmwdshow">
                            <li class="title v4">
                                ����˵���ĵ�
                            </li>
                            <li style="height:350px;">
                                <div class="v3">
                                    <textarea id="thejksmwdtext" style="color:#666;width:720px;height:310px; font-size:16px;resize: none; background-color:#FFF; line-height:20px; border:none;" name="" maxlength="1000000" onpropertychange="if(value.length>1000000) value=value.substr(0,1000000)" onKeyPress="this.style.color='black';" disabled readonly>
һ�����ͽӿڣ�
	1.�����ַ�������ַ�ǿͻ��ӿڳ������ʱ�����url��ַ�����õ���http post �ӿڣ���ַ�ǣ�http://duanxin.xzkj168.cn/server/sendsms.php
	����ڵ�ַһ�㲻�ᷢ���仯���������仯��ʱ�򣬻�֪ͨ�ӿ��û���
	
	2.����˵��
	
	��������        ˵��
	username        �˺�
	pwd             ����
	mobile          ȫ�����͵ĺ��룬�������֮���ð�Ƕ��Ÿ���
	content         ��������	���ŵ����ݣ�������ҪGBK����
	sendtime        ��ʱ����ʱ�� Ϊ�ձ�ʾ�������ͣ���ʱ���͸�ʽ2010-10-24 09:08:10
	���磺
	username=�˺�&pwd=����&mobile=15023230000&content=����&sendtime=
	3����ֵ
	�ڽ��յ��ͻ��˷��͵�http����󣬷���һ�����ִ��롣��ʽΪ��
	
	0:  ������Ϣ������
	1:  �û����������
	2:  �������ݺ�ģ�岻ƥ�䡣
	3:  ��ʱ����ʱ����̡�����ʱ����ʱ��Ҫ���ڵ�ǰʱ����������ϣ���
	4:  ���㡣
	5:  �ύʧ�ܡ�
	6:  ���ǽӿ��û�
	
	20: ���������ԭ������쳣�����ύʧ�ܣ��������ύ��
	200:�ύ�ɹ�
	
	
��.����ѯ�ӿ�
	2.1�����ַ
	�����ַ�ǿͻ��ӿڳ������ʱ�����url��ַ�����õ���http post �ӿڣ���ַ��
	http://duanxin.xzkj168.cn/server/getyue.php
	��ڵ�ַһ�㲻�ᷢ���仯���������仯��ʱ�򣬻�֪ͨ�ӿ��û�	
	
2.2����˵��
	
	�������� 	   ˵��
	username	   �˺�
	pwd	           ����
	���磺
	username=�˺�&pwd=����
	2.3����ֵ
	�ڽ��յ��ͻ��˷��͵�http����󣬷���һ�����ִ��롣��ʽΪ��
	
	-1��������Ϣ������
	-2: �û����������
	-3: ���ǽӿ��û�
	
	���������������ص�����������ڵ���0�����ʾ��Ϊ����
</textarea>
                                </div>
                            </li>
                        </ul>
                        <ul id="phpshow" style="display:none;">
                            <li class="title v4">
                                php����ʾ��
                            </li>
                            <li style="height:350px;">
                                <div class="v3">
                                    <textarea id="thephptext" style="color:#666;width:720px;height:310px; font-size:16px;resize: none; background-color:#FFF; line-height:20px; border:none;" name="" maxlength="1000000" onpropertychange="if(value.length>1000000) value=value.substr(0,1000000)" onKeyPress="this.style.color='black';" disabled readonly>{$shili_php}</textarea>
                                </div>
                            </li>
                        </ul>
                        <ul id="javashow" style="display:none;">
                            <li class="title v4">
                                java����ʾ��
                            </li>
                            <li style="height:350px;">
                                <div class="v3">
                                    <textarea id="thejavatext" style="color:#666;width:720px;height:310px; font-size:16px;resize: none; background-color:#FFF; line-height:20px; border:none;" name="" maxlength="1000000" onpropertychange="if(value.length>1000000) value=value.substr(0,1000000)" onKeyPress="this.style.color='black';" disabled readonly>{$shili_java}</textarea>
                                </div>
                            </li>
                        </ul>
                        <ul id="aspshow" style="display:none;">
                            <li class="title v4">
                                asp����ʾ��
                            </li>
                            <li style="height:350px;">
                                <div class="v3">
                                    <textarea id="theasptext" style="color:#666;width:720px;height:310px; font-size:16px;resize: none; background-color:#FFF; line-height:20px; border:none;" name="" maxlength="1000000" onpropertychange="if(value.length>1000000) value=value.substr(0,1000000)" onKeyPress="this.style.color='black';" disabled readonly>{$shili_asp}</textarea>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="v6" style=" display:none;">
            <div class="v7">
                ����û��������Ž�������<a href="" style="color:#0078ad;">&gt;&gt;��������</a>
            </div>
        </div>
    </div>
</div>


<script src="baima/template/js/jquery.min.js" type="text/javascript"></script>
<script src="baima/template/js/dxxtmenu.js" type="text/javascript"></script>
<script src="baima/template/js/dxjkjkgl.js" type="text/javascript"></script>






<!--{template footer}-->