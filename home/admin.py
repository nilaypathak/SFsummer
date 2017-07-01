from django.contrib import admin
from .models import Threads,Comments,Category,Profile

admin.site.register(Threads)
admin.site.register(Comments)
admin.site.register(Category)
admin.site.register(Profile)
