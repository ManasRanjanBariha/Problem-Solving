package december;
import java.util.*;
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
 
class BinaryTreeInorderTraversal { 
    List<Integer>ans=new ArrayList<>();
    public List<Integer> inorderTraversal(TreeNode root) {
        preorder(root);
        return ans;
    }
    public void preorder(TreeNode root)
    {
        if(root==null)
        {
            return;
        }
        preorder(root.left);
        ans.add(root.val);
        
        preorder(root.right);
    }
}