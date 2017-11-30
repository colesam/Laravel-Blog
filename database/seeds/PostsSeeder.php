<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  1
        $post = new Post();
        $post->title = "Sodales per taciti inceptos";
        $post->body  = "Pulvinar sollicitudin magnis fusce curae quis a pretium sodales accumsan et, vitae augue aliquam eleifend vulputate ultricies euismod taciti felis, nascetur facilisis diam egestas aptent nullam himenaeos penatibus sapien. Ad lectus integer cras sociosqu fusce rhoncus aliquam, pretium ridiculus nisl cum odio erat, nam facilisi turpis bibendum libero purus. Vestibulum donec rhoncus aptent porttitor ullamcorper justo sodales netus gravida habitant tellus habitasse varius lacus, in conubia sociis metus orci suscipit tempor egestas iaculis at etiam fringilla.";
        $post->slug  = "sodales";
        $post->save();
        
        //  2
        $post = new Post();
        $post->title = "Gravida justo phasellus iaculis ut";
        $post->body  = "Fringilla netus luctus vehicula nec natoque fusce ornare blandit turpis sociis venenatis, non accumsan facilisi nostra in sollicitudin fames curae dignissim iaculis. Nam malesuada pulvinar nec suscipit, non id. Lacus malesuada velit mus inceptos sagittis mattis vehicula at aptent, praesent parturient risus cursus rhoncus curabitur nulla massa tristique, iaculis justo laoreet per magna tempor varius consequat. Ultricies magnis aliquam egestas magna iaculis, class vel potenti. Fermentum cras egestas penatibus vehicula nec tempor justo non semper habitant, purus nascetur netus erat gravida facilisis condimentum fames sollicitudin, nam libero a tellus dapibus nunc diam integer euismod.";
        $post->slug  = "gravida-justo";
        $post->save();
        
        //  3
        $post = new Post();
        $post->title = "Ut ullamcorper netus tristique lacus viverra";
        $post->body  = "Nisi parturient luctus volutpat enim sollicitudin quam lectus elementum venenatis maecenas sociis, iaculis felis nulla pellentesque imperdiet netus facilisi accumsan rutrum per arcu ultrices, nibh erat hendrerit lacus ultricies nullam laoreet eros cum gravida. Sapien fermentum molestie eget velit fringilla posuere dis, odio torquent class blandit diam nam. Nunc sagittis curabitur dapibus venenatis class euismod semper iaculis convallis torquent lacinia, sociosqu lacus nibh in quis lobortis integer bibendum sodales penatibus risus, litora mattis nisl odio auctor placerat leo nascetur ridiculus tortor. Mattis suscipit at non erat neque nulla, hac dignissim faucibus consequat torquent tincidunt parturient, habitasse eget per interdum et. Orci sed fames pellentesque pharetra nisl rhoncus porttitor augue, praesent eu urna diam morbi ligula accumsan condimentum, inceptos platea malesuada rutrum cubilia hendrerit consequat. Inceptos risus suspendisse porta mus nostra, netus felis neque condimentum duis, velit blandit parturient est.";
        $post->slug  = "ullamcorper";
        $post->save();
        
        //  4
        $post = new Post();
        $post->title = "Lorem ipsum dolor sit amet consectetur adipiscing elit";
        $post->body  = "Praesent vestibulum est tincidunt mollis tempor eget pellentesque class, litora donec primis metus fames molestie venenatis ullamcorper, conubia lacinia vel convallis inceptos mi magna. Facilisi tristique tortor integer porta sociosqu cum leo rhoncus, nisi massa blandit sagittis himenaeos tellus mattis phasellus quam, duis sociis ultricies nibh accumsan aptent ullamcorper.";
        $post->slug  = "lorem-ipsum";
        $post->save();
        
        //  5
        $post = new Post();
        $post->title = "Eu viverra aliquet cubilia";
        $post->body  = "Mattis elementum cursus aptent tortor iaculis vestibulum laoreet faucibus penatibus, quis cras auctor purus magna integer arcu turpis, natoque conubia class rhoncus pretium fermentum ante proin. Metus aliquam praesent ultricies duis curae auctor quisque porta, nostra accumsan viverra parturient felis sem cum, nisl dis aliquet inceptos posuere nascetur enim. Ornare hendrerit nisi malesuada nibh scelerisque vel interdum pellentesque, rhoncus enim diam placerat ridiculus conubia inceptos torquent, accumsan et in dui leo nascetur phasellus. Nec lacus nibh aliquet vel aliquam vulputate ut, consequat mauris tortor nunc conubia eget, pulvinar nisi nascetur cras neque ante.";
        $post->slug  = "viverra";
        $post->save();
        
        //  6
        $post = new Post();
        $post->title = "Vestibulum ad sociosqu feugiat id";
        $post->body  = "Nunc cum congue augue libero vel dui sollicitudin posuere phasellus, lacinia dapibus cubilia rutrum enim lobortis torquent pretium taciti aliquam, iaculis condimentum ultricies volutpat lacus nam ultrices sapien. Taciti porta suscipit litora potenti ullamcorper sed bibendum erat tristique dictum, neque iaculis feugiat ridiculus montes posuere praesent maecenas accumsan gravida penatibus, fermentum metus hac ac congue fames scelerisque habitant ut. Ridiculus lacus montes magnis augue felis aliquam dapibus praesent duis, cubilia et donec ut dictum imperdiet lacinia porta, tempor tincidunt sollicitudin nibh hendrerit himenaeos suspendisse justo.";
        $post->slug  = "sociosqu";
        $post->save();
        
        //  7
        $post = new Post();
        $post->title = "Gravida justo phasellus iaculis ut, lacus magna";
        $post->body  = "Facilisis orci vivamus tortor metus mattis suscipit augue magna, gravida a fames vitae non volutpat sapien, at curae suspendisse netus nisi lacus tellus. Fusce euismod rhoncus pellentesque lobortis cursus non varius platea placerat aenean sociis, arcu lacus mollis habitasse sapien ullamcorper hendrerit dictum dui suscipit mus, ante nibh hac nostra bibendum natoque augue viverra gravida quisque. Lectus fames sollicitudin maecenas porttitor egestas felis facilisis suscipit, praesent torquent dapibus duis magnis phasellus magna, orci conubia semper feugiat scelerisque montes ultricies. Dapibus natoque lacus nullam gravida magnis mollis scelerisque nunc aptent sed commodo est urna imperdiet iaculis senectus fermentum fames, massa class ad ligula molestie potenti curabitur porta montes facilisi tincidunt nisi in nam diam at.";
        $post->slug  = "lacus-magna";
        $post->save();
        
        //  8
        $post = new Post();
        $post->title = "Diam erat varius ultricies dapibus";
        $post->body  = "Tristique ut aenean curae pulvinar mauris penatibus sodales, venenatis ac sed pretium elementum dapibus leo, nascetur metus bibendum sem consequat posuere. Imperdiet netus vivamus dignissim eros justo rhoncus pharetra, aliquam fringilla aliquet phasellus dictum ullamcorper malesuada, ultrices fames viverra condimentum quam conubia. Suspendisse convallis praesent ut feugiat lacinia sociis inceptos faucibus vestibulum, nullam aptent augue bibendum phasellus cursus viverra.";
        $post->slug  = "ultricies-dapibus";
        $post->save();
        
        //  9
        $post = new Post();
        $post->title = "Porttitor dignissim";
        $post->body  = "Tempus platea phasellus pulvinar natoque congue tempor semper volutpat, nulla egestas tellus tortor inceptos aliquet. Ligula sagittis purus ullamcorper nisi quam sociosqu quis, dis pulvinar lobortis ornare tempus laoreet, aptent porta fringilla elementum turpis aliquet. Metus laoreet maecenas massa blandit id curae semper potenti a, cras sodales lacinia ultrices sociosqu nec iaculis urna, praesent nostra integer morbi nisl aenean purus conubia. Volutpat suspendisse nisi sodales blandit varius montes, tellus sociis mus facilisi fames per, et tristique massa porttitor feugiat. Sagittis habitasse malesuada fusce penatibus laoreet potenti ante etiam libero hac, eget netus tortor integer ligula nibh nostra ultricies nullam, imperdiet pharetra mattis himenaeos erat primis vehicula conubia vestibulum. Hac dis per congue purus phasellus molestie facilisi rutrum non sollicitudin, feugiat tellus arcu ullamcorper et imperdiet eros senectus semper consequat condimentum, facilisis scelerisque ante penatibus parturient tristique dignissim sed mus. Platea tellus maecenas conubia porttitor mus imperdiet lacus, iaculis ridiculus risus in laoreet purus vulputate, ad tempus torquent pellentesque feugiat etiam.";
        $post->slug  = "dignissim";
        $post->save();
        
        //  10
        $post = new Post();
        $post->title = "Fusce eleifend lectus mi magnis hac venenatis";
        $post->body  = "Sagittis habitasse malesuada fusce penatibus laoreet potenti ante etiam libero hac, eget netus tortor integer ligula nibh nostra ultricies nullam, imperdiet pharetra mattis himenaeos erat primis vehicula conubia vestibulum. Hac dis per congue purus phasellus molestie facilisi rutrum non sollicitudin, feugiat tellus arcu ullamcorper et imperdiet eros senectus semper consequat condimentum, facilisis scelerisque ante penatibus parturient tristique dignissim sed mus. Platea tellus maecenas conubia porttitor mus imperdiet lacus, iaculis ridiculus risus in laoreet purus vulputate, ad tempus torquent pellentesque feugiat etiam. Quam nibh platea suspendisse orci pharetra rhoncus egestas sem non interdum, tincidunt etiam phasellus enim habitant pretium purus vel lectus mattis sollicitudin, gravida curae lobortis massa ante metus turpis malesuada quis. Lobortis eget urna pretium laoreet natoque morbi vehicula mauris ac, placerat id magnis montes habitant est lacinia proin.";
        $post->slug  = "eleifend";
        $post->save();
        
        //  11
        $post = new Post();
        $post->title = "Egestas inceptos in nulla tortor";
        $post->body  = "Curabitur duis nullam nibh laoreet metus a sagittis lobortis, aenean eros vitae quisque ridiculus scelerisque suspendisse, libero vel tortor porttitor sociosqu dui ut. Porta habitant id parturient magna facilisi maecenas inceptos, phasellus laoreet ut senectus erat lacinia sagittis eleifend, taciti tincidunt sodales donec vitae class. Mattis orci turpis accumsan facilisi facilisis eros in curae, nullam congue quam odio et penatibus tempor nisi, condimentum nibh at proin ridiculus phasellus viverra. Aliquet sociosqu sapien elementum conubia purus tellus faucibus venenatis pharetra taciti est habitant condimentum rutrum, auctor eu eleifend hac justo molestie senectus torquent cubilia cras duis velit interdum. Dictum mi arcu nulla nascetur ut nisi nec fames sociosqu pharetra gravida, nisl parturient justo a purus interdum urna luctus fusce in.";
        $post->slug  = "inceptos";
        $post->save();
        
        //  12
        $post = new Post();
        $post->title = "Fames tellus sagittis gravida etiam sem parturient";
        $post->body  = "Nullam luctus placerat dictumst suscipit mi magna primis phasellus sociosqu, parturient donec laoreet elementum viverra at class natoque litora, congue montes quam consequat augue magnis mollis it ullamcorper fermentum proin felis etiam facilisi, aliquam gravida accumsan nullam primis, scelerisque mauris pharetra platea ad. Orci per purus tincidunt semper consequat leo iaculis eros pulvinar nibh, conubia nostra ad sagittis viverra ante suspendisse congue maecenas nec, est curabitur vulputate vel auctor porttitor habitasse proin urna.";
        $post->slug  = "parturient";
        $post->save();
        
        //  13
        $post = new Post();
        $post->title = "Nullam fusce praesent";
        $post->body  = "Donec nunc torquent lacinia sociis bibendum ante varius quis in euismod vulputate, turpis convallis blandit eros phasellus volutpat facilisi proin sociosqu ad. Sapien netus ornare tincidunt metus ante a tempus dictum ridiculus habitant facilisi, inceptos nulla donec aptent curae curabitur magnis mollis libero egestas volutpat cras, purus imperdiet augue condimentum dapibus tristique scelerisque vivamus viverra ligula. Rhoncus faucibus cubilia laoreet lacus praesent ornare ullamcorper aptent curabitur nostra libero suspendisse posuere, magnis phasellus facilisis sociis dictumst accumsan fusce duis consequat molestie vivamus montes lectus, orci donec proin condimentum eleifend auctor elementum pulvinar iaculis aliquet conubia eu. Litora lobortis lectus aptent feugiat ut justo interdum taciti, rutrum dictum donec posuere enim eget augue mattis curae, dapibus montes massa placerat pretium at suspendisse. Velit erat tincidunt risus aliquet duis suspendisse netus, hac vehicula euismod ullamcorper per lobortis nisl blandit, tempor aliquam sem cubilia posuere vestibulum.";
        $post->slug  = "fusce";
        $post->save();
        
        //  14
        $post = new Post();
        $post->title = "Penatibus sed inceptos orci vivamus pharetra malesuada";
        $post->body  = "Aliquet sociosqu sapien elementum conubia purus tellus faucibus venenatis pharetra taciti est habitant condimentum rutrum, auctor eu eleifend hac justo molestie senectus torquent cubilia cras duis velit interdum. Dictum mi arcu nulla nascetur ut nisi nec fames sociosqu pharetra gravida, nisl parturient justo a purus interdum urna luctus fusce in.";
        $post->slug  = "pharetra-malesuada";
        $post->save();
        
        //  15
        $post = new Post();
        $post->title = "Pulvinar sollicitudin magnis fusce";
        $post->body  = "Volutpat suspendisse nisi sodales blandit varius montes, tellus sociis mus facilisi fames per, et tristique massa porttitor feugiat. Sagittis habitasse malesuada fusce penatibus laoreet potenti ante etiam libero hac, eget netus tortor integer ligula nibh nostra ultricies nullam, imperdiet pharetra mattis himenaeos erat primis vehicula conubia vestibulum. Hac dis per congue purus phasellus molestie facilisi rutrum non sollicitudin, feugiat tellus arcu ullamcorper et imperdiet eros senectus semper consequat condimentum, facilisis scelerisque ante penatibus parturient tristique dignissim sed mus. Platea tellus maecenas conubia porttitor mus imperdiet lacus, iaculis ridiculus risus in laoreet purus vulputate, ad tempus torquent pellentesque feugiat etiam.";
        $post->slug  = "magnis";
        $post->save();
        
        //  16
        $post = new Post();
        $post->title = "Ad lectus";
        $post->body  = "Metus laoreet maecenas massa blandit id curae semper potenti a, cras sodales lacinia ultrices sociosqu nec iaculis urna, praesent nostra integer morbi nisl aenean purus conubia. Volutpat suspendisse nisi sodales blandit varius montes, tellus sociis mus facilisi fames per, et tristique massa porttitor feugiat.";
        $post->slug  = "ad-lectus";
        $post->save();
        
        //  17
        $post = new Post();
        $post->title = "Iaculis fringilla facilisis";
        $post->body  = "Nunc cum congue augue libero vel dui sollicitudin posuere phasellus, lacinia dapibus cubilia rutrum enim lobortis torquent pretium taciti aliquam, iaculis condimentum ultricies volutpat lacus nam ultrices sapien. Taciti porta suscipit litora potenti ullamcorper sed bibendum erat tristique dictum, neque iaculis feugiat ridiculus montes posuere praesent maecenas accumsan gravida penatibus, fermentum metus hac ac congue fames scelerisque habitant ut. Ridiculus lacus montes magnis augue felis aliquam dapibus praesent duis, cubilia et donec ut dictum imperdiet lacinia porta, tempor tincidunt sollicitudin nibh hendrerit himenaeos suspendisse justo.";
        $post->slug  = "fringilla";
        $post->save();
        
        //  18
        $post = new Post();
        $post->title = "Fringilla netus luctus";
        $post->body  = "Praesent vestibulum est tincidunt mollis tempor eget pellentesque class, litora donec primis metus fames molestie venenatis ullamcorper, conubia lacinia vel convallis inceptos mi magna. Facilisi tristique tortor integer porta sociosqu cum leo rhoncus, nisi massa blandit sagittis himenaeos tellus mattis phasellus quam, duis sociis ultricies nibh accumsan aptent ullamcorper.";
        $post->slug  = "luctus";
        $post->save();
        
        //  19
        $post = new Post();
        $post->title = "Nam malesuada pulvinar";
        $post->body  = "Sapien fermentum molestie eget velit fringilla posuere dis, odio torquent class blandit diam nam. Nunc sagittis curabitur dapibus venenatis class euismod semper iaculis convallis torquent lacinia, sociosqu lacus nibh in quis lobortis integer bibendum sodales penatibus risus, litora mattis nisl odio auctor placerat leo nascetur ridiculus tortor. Mattis suscipit at non erat neque nulla, hac dignissim faucibus consequat torquent tincidunt parturient, habitasse eget per interdum et. Orci sed fames pellentesque pharetra nisl rhoncus porttitor augue, praesent eu urna diam morbi ligula accumsan condimentum, inceptos platea malesuada rutrum cubilia hendrerit consequat.";
        $post->slug  = "malesuada";
        $post->save();
        
        //  20
        $post = new Post();
        $post->title = "Fermentum cras egestas";
        $post->body  = "Nam malesuada pulvinar nec suscipit, non id. Lacus malesuada velit mus inceptos sagittis mattis vehicula at aptent, praesent parturient risus cursus rhoncus curabitur nulla massa tristique, iaculis justo laoreet per magna tempor varius consequat. Ultricies magnis aliquam egestas magna iaculis, class vel potenti. Fermentum cras egestas penatibus vehicula nec tempor justo non semper habitant, purus nascetur netus erat gravida facilisis condimentum fames sollicitudin, nam libero a tellus dapibus nunc diam integer euismod.";
        $post->slug  = "egestas";
        $post->save();
    }
}
