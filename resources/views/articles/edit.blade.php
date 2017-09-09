{!! Form::model($article, ['method' => 'PATCH', 'route' => ['articles.update', $article->id], 'id' => 'articles-form']) !!}
@include ('articles.form', ['submitButtonText' => 'Edit Article'])
{!! Form::close() !!}