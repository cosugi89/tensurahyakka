export default function News() {
  const news = [
    {
      category: "更新情報",
      date: "2025/03/16",
      detail:
        "キャラクター（レオン、シルビア、ガドラ、クロエ、ヒナタ、ルドラ）の情報を追加！",
    },
    {
      category: "更新情報",
      date: "2025/02/18",
      detail: "キャラクター（ユウキ、ルミナス）の情報を追加！",
    },
    {
      category: "更新情報",
      date: "2025/02/05",
      detail:
        "キャラクター（ディアブロ、ギィ、ヴェルザード、ジャヒル）の情報を追加！",
    },
    {
      category: "更新情報",
      date: "2025/02/05",
      detail: "スピンオフ作品「クレイマンREVENGE」の情報を追加！",
    },
    {
      category: "更新情報",
      date: "2025/02/02",
      detail: "22巻「3章・終章」の情報を追加！",
    },
    {
      category: "更新情報",
      date: "2025/02/01",
      detail: "22巻「2章」の情報を追加！",
    },
    {
      category: "更新情報",
      date: "2025/01/30",
      detail: "22巻「序章・1章」の情報を追加！",
    },
    {
      category: "公式",
      date: "2025/01/30",
      detail: "『転生したらスライムだった件』書籍22巻発売！",
    },
    {
      category: "更新情報",
      date: "2025/01/29",
      detail: "転スラ設定まとめサイト「転スラ百科」リニューアル！",
    },
  ];

  return (
    <div className="mx-2 py-4 space-y-4">
      {news.map((e) => (
        <div
          key={e.detail}
          className="shadow p-4 rounded-md space-y-3 bg-background"
        >
          <div className="flex items-center space-x-4">
            <div className="col-span-1 text-xs p-[3px] rounded-full bg-accent text-center w-28">
              {e.category}
            </div>
            <div className="col-span-2 text-xs ">{e.date}</div>
          </div>
          <p className="text-sm">{e.detail}</p>
        </div>
      ))}
    </div>
  );
}
