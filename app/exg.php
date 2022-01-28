class ComingSoon extends Model
{
    protected $table = 'coming_soon';
    protected $primaryKey = 'coming_soon_id';
    protected $fillable = [
        'coming_soon_image_url', 'coming_soon_video_url', 'coming_soon_visibility', 'coming_soon_pubish_status', 'coming_soon_title', 'coming_soon_list_order', 'updated_at'
    ];
}
 $videos = ComingSoon::select('*')->orderBy('coming_soon_list_order', 'asc')->paginate(globalSettings('comming list'));



 ComingSoon::create([
            'coming_soon_video_url' => $request->video_url,
            'coming_soon_visibility' => $request->coming_soon_visibility,
            'coming_soon_pubish_status' => $request->coming_soon_pubish_status,
            'coming_soon_image_url' => $img_name,
            'coming_soon_title' => $request->coming_soon_title,
        ]);



 ComingSoon::where('coming_soon_id', $id)->update([
            'coming_soon_video_url' => $request->video_url,
            'coming_soon_visibility' => $request->coming_soon_visibility,
            'coming_soon_pubish_status' => $request->coming_soon_pubish_status,
            'coming_soon_image_url' => $img_name,
            'coming_soon_title' => $request->coming_soon_title,
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        ComingSoon::where('coming_soon_id', $id)->delete();