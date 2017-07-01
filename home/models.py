from django.db import models
from django.contrib.auth.models import User
from django.db.models.signals import post_save
from django.dispatch import receiver
from django.utils.timezone import now


class Category(models.Model):
    title = models.CharField(max_length=30)


    def __str__(self):
        return self.title



class Threads(models.Model):
    category = models.ForeignKey(Category, on_delete=models.CASCADE)
    name = models.CharField(max_length=30,default="nil")
    date = models.DateTimeField(max_length=10,auto_now_add=True, blank=True)
    topic_name = models.CharField(max_length=30)
    post_logo = models.CharField(max_length=30,default="nil")
    Question = models.CharField(max_length=1500)
    def __str__(self):
        return self.topic_name +' - '+self.name


class Comments(models.Model):
    thread = models.ForeignKey(Threads, on_delete=models.CASCADE)
    comment_name = models.CharField(max_length=30)
    date = models.DateTimeField(auto_now_add=True, blank=True)
    comment_body = models.CharField(max_length=1500)

    def __str__(self):
        return self.comment_name


class Profile(models.Model):
    user = models.OneToOneField(User, on_delete=models.CASCADE)
    bio = models.TextField(max_length=500, blank=True)
    location = models.CharField(max_length=30, blank=True)
    birth_date = models.DateField(null=True, blank=True)

    @receiver(post_save, sender=User)
    def update_user_profile(sender, instance, created, **kwargs):
        if created:
            Profile.objects.create(user=instance)


