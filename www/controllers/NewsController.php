<?php


class NewsController
{

    public function actionAll()
    {
        $art=NewsModel::findOneByColumn('title','Today in the world');
        $art->title='Today in the country';
        $art->text='Is calm...';
        $art->save();

        var_dump($art->id);

    /*
        $news=News::getAll();
        $view=new View();

        //$view->assign('items',$news);
        //$view->assign('items',$news);
        $view->items=$news;

        //foreach ($view as $k=>$v){
        //    echo $k;
        //}


        $view->display('news/all.php');*/
    }

    /*public function actionOne()
    {

        $id=$_GET['id'];
        $item=News::getOne($id);
        $view=new View();
        $view->assign('items',$item);
        $view->display('news/one.php');
    }*/
}