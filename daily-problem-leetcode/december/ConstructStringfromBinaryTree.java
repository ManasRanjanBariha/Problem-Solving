package december;


//   Definition for a binary tree node.
  class TreeNode {
      int val;
      TreeNode left;
      TreeNode right;
      TreeNode() {}
      TreeNode(int val) { this.val = val; }
      TreeNode(int val, TreeNode left, TreeNode right) {
          this.val = val;
          this.left = left;
          this.right = right;
      }
  }
 
public class ConstructStringfromBinaryTree {
    String ans="";
    public String tree2str(TreeNode root) {
        StringBuilder res=new StringBuilder();
        pre(root,res);
        return res.toString();
    }
    void pre(TreeNode t,StringBuilder res)
    {
        if(t==null)
        {
            return;
        }
        res.append(String.valueOf(t.val));
        if(t.left==null  && t.right==null )
        {
            return;
        }
        res.append('(');
        pre(t.left,res);
        res.append(')');
        if(t.right!=null)
        {
          res.append('(');
        pre(t.right,res);
        res.append(')');  
        }
    }
}