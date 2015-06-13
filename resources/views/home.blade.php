<!DOCTYPE html>
<html>
    <head>
        <title>Kids</title>

        <!--<link href='{{ asset("bootstrap/css/bootstrap.min.css") }}' rel='stylesheet' type='text/css'>-->
        <!--<script src="{{ asset("bootstrap/js/bootstrap.min.js") }}"></script>-->
          <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link href='{{ asset("assets/gencss/app.css") }}' rel='stylesheet' type='text/css'>

        @include('polymer-elements')

    </head>

    <body lass="fullbleed layout vertical">




    <paper-drawer-panel>

        <!--drawer-->
        <paper-header-panel  class="fit" mode="waterfall-tall" drawer>

            <!--start of drawer toolbar-->
            <paper-toolbar class="tall">
                <div > <div class="title">The drawer Toolbar</div> </div>
            </paper-toolbar>
            <div class="drawer-content">
                <paper-menu class="list">
                    <paper-item>Main</paper-item>
                    <paper-item>Forum</paper-item>
                    <paper-item>Comments</paper-item>
                    <paper-item>Contacts</paper-item>
                </paper-menu>
            </div>

        </paper-header-panel>

        
        
        <!--main drawer-->
        <paper-header-panel  class="fit" mode="waterfall-tall" main>

            <!--start of main toolbar-->
            <paper-toolbar class="tall">
                <paper-icon-button icon="menu" on-tap="menuAction" paper-drawer-toggle></paper-icon-button>
                <div class="title">KidsCodeBaseAfrica</div>
            </paper-toolbar>
            
            

            <!--start of main content-->
            <div class="main-content"> might ignore it, depending on its scheme. Now if we give the button a label, the button may need 
                a new minimum size in order to display itself properly. The layout manager might show more 
                respect for the button's minimum size and guarantee that it has at least that much space. 
                Similarly, a particular component might not be able to display itself properly if it is too large 
                (perhaps it has to scale up an image); it can use getMaximumSize( )to report the largest size 
                it considers acceptable.The preferred size of a Containerobject has the same meaning as for any other type of component. However, since a Containermay hold its own components and want to arrange 
                them in its own layout, its preferred size is a function of its layout manager. The layout manager is 
                therefore involved in both sides of the issue. It asks the components in its container for their 
                preferred (or minimum) sizes in order to arrange them. Based on those values, it calculates the 
                preferred size of its own container (which can be communicated to the container's parent).When a layout manager is called to arrange its components, it is working within a fixed area. It 
                usually begins by looking at its container's dimensions, and the preferred or minimum sizes of the 
                child components. It then doles out screen area and sets the sizes of components according to its 
                scheme. You can override the getMinimumSize( ), getMaximumSize( ), and 
                getPreferredSize( )methods of a component, but you should do this only if you are actually 
                specializing the component, and it has new needs. If you find yourself fighting with a layout 
                manager because it's changing the size of one of your components, you are probably using the 
                wrong kind of layout manager or not composing your user interface properly. Remember that it's 
                possible to use a number of JPanelobjects in a given display, each one with its own 
                LayoutManager. Try breaking down the problem: place related components in their own 
                JPaneland then arrange the panels in the container. When that becomes too complicated, you 
                can choose to use a constraint-based layout manager like GridBagLayout, which we'll discuss 
                later in this chapter.might ignore it, depending on its scheme. Now if we give the button a label, the button may need 
                a new minimum size in order to display itself properly. The layout manager might show more 
                respect for the button's minimum size and guarantee that it has at least that much space. 
                Similarly, a particular component might not be able to display itself properly if it is too large 
                (perhaps it has to scale up an image); it can use getMaximumSize( )to report the largest size 
                it considers acceptable.The preferred size of a Containerobject has the same meaning as for any other type of component. However, since a Containermay hold its own components and want to arrange 
                them in its own layout, its preferred size is a function of its layout manager. The layout manager is 
                therefore involved in both sides of the issue. It asks the components in its container for their 
                preferred (or minimum) sizes in order to arrange them. Based on those values, it calculates the 
                preferred size of its own container (which can be communicated to the container's parent).When a layout manager is called to arrange its components, it is working within a fixed area. It 
                usually begins by looking at its container's dimensions, and the preferred or minimum sizes of the 
                child components. It then doles out screen area and sets the sizes of components according to its 
                scheme. You can override the getMinimumSize( ), getMaximumSize( ), and 
                getPreferredSize( )methods of a component, but you should do this only if you are actually 
                specializing the component, and it has new needs. If you find yourself fighting with a layout 
                manager because it's changing the size of one of your components, you are probably using the 
                wrong kind of layout manager or not composing your user interface properly. Remember that it's 
                possible to use a number of JPanelobjects in a given display, each one with its own 
                LayoutManager. Try breaking down the problem: place related components in their own 
                JPaneland then arrange the panels in the container. When that becomes too complicated, you 
                can choose to use a constraint-based layout manager like GridBagLayout, which we'll discuss 
                later in this chapter.might ignore it, depending on its scheme. Now if we give the button a label, the button may need 
                a new minimum size in order to display itself properly. The layout manager might show more 
                respect for the button's minimum size and guarantee that it has at least that much space. 
                Similarly, a particular component might not be able to display itself properly if it is too large 
                (perhaps it has to scale up an image); it can use getMaximumSize( )to report the largest size 
                it considers acceptable.The preferred size of a Containerobject has the same meaning as for any other type of component. However, since a Containermay hold its own components and want to arrange 
                them in its own layout, its preferred size is a function of its layout manager. The layout manager is 
                therefore involved in both sides of the issue. It asks the components in its container for their 
                preferred (or minimum) sizes in order to arrange them. Based on those values, it calculates the 
                preferred size of its own container (which can be communicated to the container's parent).When a layout manager is called to arrange its components, it is working within a fixed area. It 
                usually begins by looking at its container's dimensions, and the preferred or minimum sizes of the 
                child components. It then doles out screen area and sets the sizes of components according to its 
                scheme. You can override the getMinimumSize( ), getMaximumSize( ), and 
                getPreferredSize( )methods of a component, but you should do this only if you are actually 
                specializing the component, and it has new needs. If you find yourself fighting with a layout 
                manager because it's changing the size of one of your components, you are probably using the 
                wrong kind of layout manager or not composing your user interface properly. Remember that it's 
                possible to use a number of JPanelobjects in a given display, each one with its own 
                LayoutManager. Try breaking down the problem: place related components in their own 
                JPaneland then arrange the panels in the container. When that becomes too complicated, you 
                can choose to use a constraint-based layout manager like GridBagLayout, which we'll discuss 
                later in this chapter.chapter.
            </div>

        </paper-header-panel>

    </paper-drawer-panel>







</body>
</html>
