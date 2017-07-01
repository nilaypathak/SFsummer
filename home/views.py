from django.shortcuts import render,get_object_or_404,HttpResponseRedirect,redirect
from .models import Threads,Comments,Category,Profile
from .forms import SignUpForm
from django.contrib.auth import login, authenticate
from django.contrib.auth.models import User
'''
class IndexView(generic.ListView):
    template_name = 'home/home.html'
    context_object_name = 'all_threads'

    def get_queryset(self):
        return Threads.objects.all()


class DetailView(generic.DetailView):
    model = Threads
    template_name = 'home/threadC.html'



'''    
def home(request):
    all_threads = Threads.objects.all()
    all_categories = Category.objects.all()
    print (request)
    context = {'all_threads': all_threads,'all_categories': all_categories}
    return render(request, 'home/home.html',context)


def threadc(request):
    return render(request, 'home/threadC.html')


def thread(request,thread_id):
    thread = get_object_or_404(Threads, pk=thread_id)
    context = {'thread': thread}
    return render(request, 'home/ThreadC.html', context)
'''
def post_new(request):
    if request.method == "POST":
        form = PostForm(request.POST)
        if form.is_valid():
            post = form.save(commit=False)
            post.save()
            return redirect('home')
    else:
        form = PostForm()
    return render(request, 'home/post_edit.html', {'form': form})
'''
def post_new(request):
    if request.method == 'POST':
        title = request.POST.get('topic_name', '')
        question = request.POST.get('Question', '')
        category = request.POST.get('category', '')
        print (title,question)
        obj = Threads(topic_name= title, Question = question,category = get_object_or_404(Category, pk=category))
        obj.name= request.user.username
        obj.save()
        all_threads = Threads.objects.all()
        context = {'all_threads': all_threads}
        return redirect('/home')
        return render(request, 'home/home.html', context)


def comment(request,thread_id):
    if request.method == 'POST':
        comment_body = request.POST.get('comment_body', '')

        obj = Comments(comment_body=comment_body)
        obj.comment_name= request.user.username
        obj.thread = get_object_or_404(Threads, pk=thread_id)
        obj.save()

        thread = get_object_or_404(Threads, pk=thread_id)
        context = {'thread': thread}
        return redirect('/home/'+thread_id)
        return render(request, '/home/ThreadC.html', context)


def signup(request):
    if request.method == 'POST':
        form = SignUpForm(request.POST)
        if form.is_valid():
            user = form.save()
            user.refresh_from_db()
            user.profile.birth_date = form.cleaned_data.get('birth_date')
            user.save()
            raw_password = form.cleaned_data.get('password1')
            user = authenticate(username=user.username, password=raw_password)
            login(request, user)
            return redirect('home')
    else:
        form = SignUpForm()
    return render(request, 'home/signup.html', {'form': form})

