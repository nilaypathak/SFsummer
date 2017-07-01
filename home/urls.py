from django.conf.urls import url
from . import views
from django.contrib.auth import views as auth_views

urlpatterns =[
    url(r'^$', views.home, name='home'),

    url(r'^(?P<thread_id>[0-9]+)/$',views.thread, name='thread' ),

    url(r'^new/$', views.post_new, name='post_new'),

    url(r'^(?P<thread_id>[0-9]+)/comment/$', views.comment, name='comment'),

    url(r'^signup/$', views.signup, name='signup'),

    url(r'^login/$', auth_views.login,{'template_name': 'home/login.html'}, name='login'),
    url(r'^logout/$', auth_views.logout, {'next_page': '/home/login/'}, name='logout'),

]