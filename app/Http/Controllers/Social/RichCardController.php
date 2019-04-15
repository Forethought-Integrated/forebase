<?php
namespace App\Http\Controllers\Social;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\OpenGraph;


class RichCardController extends Controller
{

    public function urlParse(Request $request)
    {
        // $data =get_meta_tags($request['url']);
        $data=OpenGraph::fetch($request['url']);
        if($data){
            if(array_key_exists("image",$data)){
                return $data;
            }
            else{
                $data['image']='https://www.google.com/s2/favicons?domain='.$request['url'];
                return $data;
            }
        }
        else{

            return $request['url'];
        }
        // if(in_array("title", $metaData))
        // {
        //     $data['title']=$metaData['title'];
        //     if(in_array("description", $metaData))
        //     {
        //         $data['description']=$metaData['description'];
        //         if(in_array("image", $metaData))
        //         {
        //             $data['description']=$metaData['description'];
        //             $data=OpenGraph::fetch($request['url']);

        //             if(in_array("image", $metaData))
        //             {
        //                 $data['description']=$metaData['description'];
        //                 // $data=OpenGraph::fetch($request['url']);

        //             }   
        //         }
        //     }

        // }
    }

    //Parse Url and Return Snippet Preview if available else return as usual
    public function urlParseString($request)
    {
        $data=OpenGraph::fetch($request);
        if($data){
                return $data;

            // if(array_key_exists("image",$data)){
            //     return $data;
            // }
            // else{
            //     $data['image']='https://www.google.com/s2/favicons?domain='.$request['url'];
            //     return $data;
            // }
        }
        else{

            return $request;
        }
    }

    public function urlSnippet(Request $request)
    {
        $urlParseData=$this->urlParse($request);
        $data=$urlParseData;
        $snippet=view('include/socialPost/urlSnippetPreview',compact('data'));

        return $snippet;
    }

    public function urlSnippetString($request)
    {
        $urlParseData=$this->urlParseString($request);
        $data=$urlParseData;
        if($data==$request)
        {
            return $data;
        }
        else
        {
            $snippet=view('include/socialPost/urlSnippetPreview',compact('data'));
            return $snippet;
        }
    }

    // Parse String and return with snippet Preview if present else return as usual
    public function parseBody($request)
    {
        $tagArray=$this->extract_tags($request,'a',null,true);
        $hrefArray;
        $i=0;
        foreach ($tagArray as $tag) {
            $hrefArray[$i]=$tag['contents'];
            $snippet=$this->urlSnippetString($hrefArray[$i]);
            // dd($tag['contents']);
            // dd($snippet);
            if($snippet==$tag['contents']){
                continue;
            }
            else{
                // dd($snippet);
                $snippetString=$snippet->render();
                if(!($snippetString==$hrefArray[$i]))
                {
                    $request=str_replace($tag['full_tag'], $snippetString, $request);
                }
                $i++;   
            }
        }
        return $request;
    }



    public function getUrls($string)
    {
        //adapted from: https://stackoverflow.com/questions/11588542/get-all-urls-in-a-string-with-php
        $regex = '/https?\:\/\/[^\" \n]+/i';
        preg_match_all($regex, $string, $matches);
        //note below that we use $matches[0], this is because we have an array of arrays
        foreach ($matches[0] as $url) {
            $s1 = substr($url, 0, strlen($url)-2);
            $s2 = '<a href="' . $s1 . '">' . $s1 . '</a>';
            echo "$s2<br />\n";
        }
    }

    //Extract Tag From HTMl and return In Array
    public function extract_tags( $html, $tag, $selfclosing = null, $return_the_entire_tag = false, $charset = 'ISO-8859-1' ){
         
        if ( is_array($tag) ){
            $tag = implode('|', $tag);
        }
         
        //If the user didn't specify if $tag is a self-closing tag we try to auto-detect it
        //by checking against a list of known self-closing tags.
        $selfclosing_tags = array( 'area', 'base', 'basefont', 'br', 'hr', 'input', 'img', 'link', 'meta', 'col', 'param' );
        if ( is_null($selfclosing) ){
            $selfclosing = in_array( $tag, $selfclosing_tags );
        }
         
        //The regexp is different for normal and self-closing tags because I can't figure out 
        //how to make a sufficiently robust unified one.
        if ( $selfclosing ){
            $tag_pattern = 
                '@<(?P<tag>'.$tag.')           # <tag
                (?P<attributes>\s[^>]+)?       # attributes, if any
                \s*/?>                   # /> or just >, being lenient here 
                @xsi';
        } else {
            $tag_pattern = 
                '@<(?P<tag>'.$tag.')           # <tag
                (?P<attributes>\s[^>]+)?       # attributes, if any
                \s*>                 # >
                (?P<contents>.*?)         # tag contents
                </(?P=tag)>               # the closing </tag>
                @xsi';
        }
         
        $attribute_pattern = 
            '@
            (?P<name>\w+)                         # attribute name
            \s*=\s*
            (
                (?P<quote>[\"\'])(?P<value_quoted>.*?)(?P=quote)    # a quoted value
                |                           # or
                (?P<value_unquoted>[^\s"\']+?)(?:\s+|$)           # an unquoted value (terminated by whitespace or EOF) 
            )
            @xsi';
     
        //Find all tags 
        if ( !preg_match_all($tag_pattern, $html, $matches, PREG_SET_ORDER | PREG_OFFSET_CAPTURE ) ){
            //Return an empty array if we didn't find anything
            return array();
        }
         
        $tags = array();
        foreach ($matches as $match){
             
            //Parse tag attributes, if any
            $attributes = array();
            if ( !empty($match['attributes'][0]) ){ 
                 
                if ( preg_match_all( $attribute_pattern, $match['attributes'][0], $attribute_data, PREG_SET_ORDER ) ){
                    //Turn the attribute data into a name->value array
                    foreach($attribute_data as $attr){
                        if( !empty($attr['value_quoted']) ){
                            $value = $attr['value_quoted'];
                        } else if( !empty($attr['value_unquoted']) ){
                            $value = $attr['value_unquoted'];
                        } else {
                            $value = '';
                        }
                         
                        //Passing the value through html_entity_decode is handy when you want
                        //to extract link URLs or something like that. You might want to remove
                        //or modify this call if it doesn't fit your situation.
                        $value = html_entity_decode( $value, ENT_QUOTES, $charset );
                         
                        $attributes[$attr['name']] = $value;
                    }
                }
                 
            }
             
            $tag = array(
                'tag_name' => $match['tag'][0],
                'offset' => $match[0][1], 
                'contents' => !empty($match['contents'])?$match['contents'][0]:'', //empty for self-closing tags
                'attributes' => $attributes, 
            );
            if ( $return_the_entire_tag ){
                $tag['full_tag'] = $match[0][0];            
            }
              
            $tags[] = $tag;
        }
         
        return $tags;
    }

}
