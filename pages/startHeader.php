<link rel="stylesheet" type="text/css" href="map.css">
<script type="text/javascript" src="http://www.openlayers.org/api/OpenLayers.js"></script>

		<script type="text/javascript" src="http://www.openstreetmap.org/openlayers/OpenStreetMap.js"></script>
		<script type="text/javascript" src="map/haefen.js"></script>
		<script type="text/javascript">

			var map;
			var layer_mapnik;
			var layer_tah;
			var layer_seamark;

			// Set current language for internationalization
			OpenLayers.Lang.setCode("<?= $t->getCurrentLanguage() ?>");

			function jumpTo(lon, lat, zoom) {
				var x = Lon2Merc(lon);
				var y = Lat2Merc(lat);
				map.setCenter(new OpenLayers.LonLat(x, y), zoom);
				return false;
			}
 
			function Lon2Merc(lon) {
				return 20037508.34 * lon / 180;
			}
 
			function Lat2Merc(lat) {
				var PI = 3.14159265358979323846;
				lat = Math.log(Math.tan( (90 + lat) * PI / 360)) / (PI / 180);
				return 20037508.34 * lat / 180;
			}
 
			function addMarker(layer, lon, lat, popupContentHTML) {
				var ll = new OpenLayers.LonLat(Lon2Merc(lon), Lat2Merc(lat));
				var feature = new OpenLayers.Feature(layer, ll);
				feature.closeBox = true;
				feature.popupClass = OpenLayers.Class(OpenLayers.Popup.FramedCloud, {minSize: new OpenLayers.Size(260, 100) } );
				feature.data.popupContentHTML = popupContentHTML;
				feature.data.overflow = "hidden";
			
				var marker = new OpenLayers.Marker(ll);
				marker.feature = feature;
			
				var markerClick = function(evt) {
					if (this.popup == null) {
						this.popup = this.createPopup(this.closeBox);
						map.addPopup(this.popup);
						this.popup.show();
					} else {
						this.popup.toggle();
					}
					OpenLayers.Event.stop(evt);
				};
				marker.events.register("mousedown", feature, markerClick);
			
				layer.addMarker(marker);
				map.addPopup(feature.createPopup(feature.closeBox));
			}
 
			function getTileURL(bounds) {
				var res = this.map.getResolution();
				var x = Math.round((bounds.left - this.maxExtent.left) / (res * this.tileSize.w));
				var y = Math.round((this.maxExtent.top - bounds.top) / (res * this.tileSize.h));
				var z = this.map.getZoom();
				var limit = Math.pow(2, z);
				if (y < 0 || y >= limit) {
					return null;
				} else {
					x = ((x % limit) + limit) % limit;
					url = this.url;
					path= z + "/" + x + "/" + y + "." + this.type;
					if (url instanceof Array) {
						url = this.selectUrl(path, url);
					}
					return url+path;
				}
			}

			function drawmap() {
				// Position and zoomlevel of the map
				var lon = 12.0915;
				var lat = 54.1878;
				var zoom = 15;

				map = new OpenLayers.Map('map', {
					projection: new OpenLayers.Projection("EPSG:900913"),
					displayProjection: new OpenLayers.Projection("EPSG:4326"),
					controls: [
						new OpenLayers.Control.Navigation(),
						new OpenLayers.Control.ScaleLine({topOutUnits : "nmi", bottomOutUnits: "km", topInUnits: 'nmi', bottomInUnits: 'km', maxWidth: '40'}),
						new OpenLayers.Control.LayerSwitcher(),
						new OpenLayers.Control.MousePosition(),
						new OpenLayers.Control.PanZoomBar()],
						maxExtent:
						new OpenLayers.Bounds(-20037508.34, -20037508.34, 20037508.34, 20037508.34),
					numZoomLevels: 18,
					maxResolution: 156543,
					units: 'meters'
				});

				// Add Layers to map-------------------------------------------------------------------------------------------------------
				// Mapnik
				layer_mapnik = new OpenLayers.Layer.OSM.Mapnik("Mapnik");
				// Osmarender
				layer_tah = new OpenLayers.Layer.OSM.Osmarender("Osmarender");
				// Seamark
				layer_seamark = new OpenLayers.Layer.TMS("<?=$t->tr("Seezeichen")?>", "http://tiles.openseamap.org/seamark/",
				{ numZoomLevels: 18, type: 'png', getURL: getTileURL, isBaseLayer: false, displayOutsideMaxExtent: true});

				map.addLayers([layer_mapnik, layer_tah, layer_seamark]);
				jumpTo(lon, lat, zoom);

				// Add harbour layer
				init_haefen(map, "./map/");
			}
		</script>

